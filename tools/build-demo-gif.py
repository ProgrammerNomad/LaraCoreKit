"""Build the README walkthrough from real, disposable application screenshots.

Run tools/browser-smoke.cjs first. Requires Pillow; does not generate mock UI.
"""
from pathlib import Path
from PIL import Image, ImageDraw, ImageFont

root = Path(__file__).resolve().parents[1]
screenshots = root / 'docs/images/screenshots'
output = screenshots / 'walkthrough.gif'
font = ImageFont.load_default(size=20)
for candidate in ['C:/Windows/Fonts/segoeui.ttf', '/usr/share/fonts/truetype/dejavu/DejaVuSans.ttf']:
    if Path(candidate).is_file():
        font = ImageFont.truetype(candidate, 20)
        break

scenes = [
    ('homepage.png', '01 / Public website'),
    ('blog.png', '02 / Public multilingual blog'),
    ('admin-dashboard.png', '03 / Filament administration'),
    ('documentation.png', '04 / Documentation (demo host)'),
]
frames = []
for filename, label in scenes:
    frame = Image.new('RGB', (960, 720), '#0f172a')
    draw = ImageDraw.Draw(frame)
    draw.text((20, 13), label, fill='white', font=font)
    with Image.open(screenshots / filename) as source:
        source = source.convert('RGB')
        source.thumbnail((960, 667), Image.Resampling.LANCZOS)
        frame.paste(source, ((960 - source.width) // 2, 53))
    frames.append(frame.quantize(colors=256))

frames[0].save(output, save_all=True, append_images=frames[1:], duration=3000,
               loop=0, disposal=2, optimize=True)
with Image.open(output) as result:
    assert result.n_frames == len(scenes)
    assert result.size == (960, 720)
    for index in range(result.n_frames):
        result.seek(index)
        assert result.info['duration'] == 3000
print(f'{output}: {len(scenes)} real views, 12 seconds, {output.stat().st_size:,} bytes')
