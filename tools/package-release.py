"""Prepare a reviewable package-only ZIP without publishing or requiring tokens."""
import hashlib
import json
from pathlib import Path
import zipfile

root = Path(__file__).resolve().parents[1]
package = root/'packages/core'
output = root/'storage/app/releases'
output.mkdir(parents=True, exist_ok=True)
archive = output/'laracorekit-preview.zip'
manifest = json.loads((package/'composer.json').read_text(encoding='utf-8'))
if manifest['name'] != 'programmernomad/laracorekit':
    raise SystemExit('Unexpected package identity.')
files = sorted(p for p in package.rglob('*') if p.is_file()
               and not any(part in {'.git', 'vendor', 'node_modules', '__pycache__'} for part in p.relative_to(package).parts)
               and p.name not in {'composer.lock', '.env'})
if not (package/'resources/dist/laracorekit.css').is_file():
    raise SystemExit('Build package assets before export.')
if any(p.is_file() and p.name not in {'laracorekit.css', 'showcase.css', 'showcase.js'} for p in (package/'resources/dist').rglob('*')):
    raise SystemExit('Unexpected files in package assets. Core build must not copy the host public directory.')
with zipfile.ZipFile(archive, 'w', compression=zipfile.ZIP_DEFLATED) as bundle:
    for file in files:
        bundle.write(file, file.relative_to(package).as_posix())
record = {
    'package': manifest['name'], 'status': 'unreleased-review-artifact',
    'sha256': hashlib.sha256(archive.read_bytes()).hexdigest(),
    'files': [p.relative_to(package).as_posix() for p in files],
}
(output/'manifest.json').write_text(json.dumps(record, indent=2)+'\n', encoding='utf-8')
print(archive)
print(f'{len(files)} files; {archive.stat().st_size:,} bytes; no demo/site dependencies.')
