<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Documentation' }} - LaraCoreKit</title>
    <meta name="description" content="LaraCoreKit documentation - Production-ready modular Laravel starter kit.">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Fira+Code:wght@400;500&display=swap" rel="stylesheet">
    
    <style>
        *,*::before,*::after{box-sizing:border-box}
        :root{
            --bg-primary:#0d0f14;--bg-secondary:#131720;--bg-sidebar:#0f1117;
            --bg-card:#1a1f2e;--bg-code:#161b29;
            --border:rgba(255,255,255,0.07);--border-hover:rgba(255,255,255,0.14);
            --accent:#7c3aed;--accent-glow:rgba(124,58,237,0.35);--accent-light:#a78bfa;
            --accent-2:#06b6d4;--text-primary:#e2e8f0;--text-secondary:#94a3b8;
            --text-muted:#64748b;--text-code:#c9d1d9;--green:#10b981;
            --sidebar-w:280px;--topbar-h:64px;--radius:10px;
            --transition:0.2s cubic-bezier(.4,0,.2,1)
        }
        html{font-size:16px}
        body{margin:0;font-family:'Inter',system-ui,sans-serif;background:var(--bg-primary);color:var(--text-primary);line-height:1.7;overflow-x:hidden}
        .topbar{position:fixed;top:0;left:0;right:0;height:var(--topbar-h);background:rgba(13,15,20,0.85);backdrop-filter:blur(16px);border-bottom:1px solid var(--border);display:flex;align-items:center;padding:0 1.5rem;z-index:100;gap:1rem}
        .topbar-logo{display:flex;align-items:center;gap:.6rem;text-decoration:none;font-weight:700;font-size:1.05rem;color:var(--text-primary);flex-shrink:0}
        .topbar-logo-badge{background:linear-gradient(135deg,var(--accent),var(--accent-2));color:#fff;font-size:.65rem;font-weight:700;padding:.15rem .45rem;border-radius:999px;letter-spacing:.05em}
        .topbar-divider{width:1px;height:28px;background:var(--border);margin:0 .5rem;flex-shrink:0}
        .topbar-section{font-size:.85rem;color:var(--text-muted);flex-shrink:0}
        .topbar-spacer{flex:1}
        .topbar-search{display:flex;align-items:center;gap:.5rem;background:var(--bg-card);border:1px solid var(--border);border-radius:8px;padding:.45rem .85rem;cursor:pointer;transition:border-color var(--transition),box-shadow var(--transition);min-width:220px}
        .topbar-search:hover{border-color:var(--accent);box-shadow:0 0 0 3px var(--accent-glow)}
        .topbar-search input{background:none;border:none;outline:none;color:var(--text-secondary);font-size:.85rem;width:100%;font-family:inherit}
        .topbar-search input::placeholder{color:var(--text-muted)}
        .search-icon{color:var(--text-muted);font-size:.9rem;flex-shrink:0}
        .search-kbd{background:var(--bg-primary);border:1px solid var(--border);border-radius:4px;font-size:.65rem;padding:.1rem .35rem;color:var(--text-muted);flex-shrink:0;font-family:'Fira Code',monospace}
        .btn-install{display:flex;align-items:center;gap:.4rem;background:linear-gradient(135deg,var(--accent),#5b21b6);color:#fff;padding:.45rem 1rem;border-radius:7px;font-size:.8rem;font-weight:600;cursor:pointer;border:none;flex-shrink:0;transition:opacity var(--transition),box-shadow var(--transition);box-shadow:0 0 15px var(--accent-glow)}
        .btn-install:hover{opacity:.9;box-shadow:0 0 25px var(--accent-glow)}
        .topbar-github{display:flex;align-items:center;gap:.35rem;color:var(--text-secondary);text-decoration:none;font-size:.82rem;font-weight:500;flex-shrink:0;transition:color var(--transition)}
        .topbar-github:hover{color:var(--text-primary)}
        .mobile-menu-btn{display:none;background:none;border:none;cursor:pointer;color:var(--text-secondary);font-size:1.2rem;padding:.25rem}
        .layout{display:flex;min-height:100vh;padding-top:var(--topbar-h)}
        .sidebar{position:fixed;top:var(--topbar-h);left:0;width:var(--sidebar-w);height:calc(100vh - var(--topbar-h));background:var(--bg-sidebar);border-right:1px solid var(--border);overflow-y:auto;padding:1.5rem 0;transition:transform var(--transition);z-index:50;scrollbar-width:thin;scrollbar-color:var(--border) transparent}
        .sidebar::-webkit-scrollbar{width:4px}
        .sidebar::-webkit-scrollbar-thumb{background:var(--border);border-radius:2px}
        .sidebar-group{margin-bottom:1.5rem}
        .sidebar-group-title{display:flex;align-items:center;gap:.45rem;font-size:.68rem;font-weight:700;color:var(--text-muted);letter-spacing:.1em;text-transform:uppercase;padding:0 1.25rem .5rem}
        .sidebar-item{display:block;padding:.45rem 1.25rem .45rem 1.5rem;font-size:.855rem;color:var(--text-secondary);text-decoration:none;transition:color var(--transition),background var(--transition);border-left:2px solid transparent}
        .sidebar-item:hover{color:var(--text-primary);background:rgba(255,255,255,0.03)}
        .sidebar-item.active{color:var(--accent-light);border-left-color:var(--accent);background:rgba(124,58,237,0.08);font-weight:500}
        .main{margin-left:var(--sidebar-w);flex:1;min-width:0;display:flex;justify-content:center}
        .content-wrapper{max-width:860px;width:100%;padding:2.5rem 2.5rem 6rem}
        .breadcrumb{display:flex;align-items:center;gap:.4rem;font-size:.8rem;color:var(--text-muted);margin-bottom:1.5rem}
        .breadcrumb a{color:var(--accent-light);text-decoration:none}
        .breadcrumb a:hover{text-decoration:underline}
        .breadcrumb-sep{color:var(--text-muted)}
        .doc-meta{display:flex;gap:.75rem;margin-bottom:1.75rem;flex-wrap:wrap}
        .doc-meta-badge{display:inline-flex;align-items:center;gap:.35rem;background:var(--bg-card);border:1px solid var(--border);border-radius:999px;font-size:.75rem;color:var(--text-secondary);padding:.25rem .75rem}
        .doc-meta-badge span{color:var(--accent-light);font-weight:600}
        .doc-content h1{font-size:2.15rem;font-weight:700;color:var(--text-primary);margin:0 0 1rem;line-height:1.2;background:linear-gradient(135deg,#e2e8f0,var(--accent-light));-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text}
        .doc-content h2{font-size:1.35rem;font-weight:600;color:var(--text-primary);margin:2.5rem 0 .85rem;padding-bottom:.5rem;border-bottom:1px solid var(--border)}
        .doc-content h3{font-size:1.05rem;font-weight:600;color:var(--text-primary);margin:1.75rem 0 .6rem}
        .doc-content h4{font-size:.95rem;font-weight:600;color:var(--accent-light);margin:1.25rem 0 .5rem}
        .doc-content p{margin:0 0 1rem;color:var(--text-secondary)}
        .doc-content a{color:var(--accent-light);text-decoration:none}
        .doc-content a:hover{text-decoration:underline}
        .doc-content pre{position:relative;background:var(--bg-code);border:1px solid var(--border);border-radius:var(--radius);padding:1.25rem 1.5rem;overflow-x:auto;margin:1.25rem 0;scrollbar-width:thin;scrollbar-color:var(--border) transparent}
        .doc-content pre::-webkit-scrollbar{height:4px}
        .doc-content pre::-webkit-scrollbar-thumb{background:var(--border);border-radius:2px}
        .doc-content pre code{font-family:'Fira Code',monospace;font-size:.85rem;color:var(--text-code);background:none;padding:0;border-radius:0;border:none}
        .copy-btn{position:absolute;top:.75rem;right:.75rem;background:var(--bg-card);border:1px solid var(--border);border-radius:6px;color:var(--text-muted);font-size:.72rem;font-weight:500;padding:.3rem .65rem;cursor:pointer;transition:all var(--transition);font-family:'Inter',sans-serif;display:flex;align-items:center;gap:.3rem}
        .copy-btn:hover{background:var(--accent);color:#fff;border-color:var(--accent)}
        .copy-btn.copied{background:var(--green);color:#fff;border-color:var(--green)}
        .doc-content code{font-family:'Fira Code',monospace;font-size:.83em;background:rgba(124,58,237,0.12);border:1px solid rgba(124,58,237,0.25);color:var(--accent-light);padding:.15em .4em;border-radius:4px}
        .doc-content ul,.doc-content ol{margin:.5rem 0 1rem 1.5rem;color:var(--text-secondary)}
        .doc-content li{margin-bottom:.35rem}
        .doc-content li p{margin:0}
        .doc-content table{width:100%;border-collapse:collapse;margin:1.25rem 0;font-size:.875rem;overflow:hidden;border-radius:var(--radius);border:1px solid var(--border)}
        .doc-content th{background:var(--bg-card);color:var(--text-muted);font-weight:600;font-size:.75rem;letter-spacing:.06em;text-transform:uppercase;padding:.75rem 1rem;text-align:left;border-bottom:1px solid var(--border)}
        .doc-content td{padding:.7rem 1rem;border-bottom:1px solid var(--border);color:var(--text-secondary)}
        .doc-content tr:last-child td{border-bottom:none}
        .doc-content tr:hover td{background:rgba(255,255,255,0.02)}
        .doc-content blockquote{border-left:3px solid var(--accent);background:rgba(124,58,237,0.06);margin:1.25rem 0;padding:.85rem 1.25rem;border-radius:0 var(--radius) var(--radius) 0}
        .doc-content blockquote p{margin:0;color:var(--text-secondary);font-style:italic}
        .doc-content hr{border:none;border-top:1px solid var(--border);margin:2rem 0}
        .doc-content strong{color:var(--text-primary);font-weight:600}
        .doc-nav{display:grid;grid-template-columns:1fr 1fr;gap:1rem;margin-top:3rem;padding-top:2rem;border-top:1px solid var(--border)}
        .doc-nav-link{display:flex;flex-direction:column;gap:.2rem;background:var(--bg-card);border:1px solid var(--border);border-radius:var(--radius);padding:1rem 1.25rem;text-decoration:none;transition:border-color var(--transition),box-shadow var(--transition),background var(--transition)}
        .doc-nav-link:hover{border-color:var(--accent);box-shadow:0 0 0 3px var(--accent-glow);background:rgba(124,58,237,0.06)}
        .doc-nav-link.next{text-align:right;margin-left:auto}
        .doc-nav-label{font-size:.7rem;color:var(--text-muted);font-weight:500;text-transform:uppercase;letter-spacing:.06em}
        .doc-nav-title{font-size:.9rem;font-weight:600;color:var(--accent-light)}
        .search-overlay{display:none;position:fixed;inset:0;background:rgba(0,0,0,0.7);backdrop-filter:blur(4px);z-index:200;padding:5rem 1rem;justify-content:center;align-items:flex-start}
        .search-overlay.open{display:flex}
        .search-modal{background:var(--bg-secondary);border:1px solid var(--border);border-radius:14px;width:100%;max-width:560px;overflow:hidden;box-shadow:0 25px 50px rgba(0,0,0,0.5)}
        .search-modal-input-wrap{display:flex;align-items:center;gap:.75rem;padding:1rem 1.25rem;border-bottom:1px solid var(--border)}
        .search-modal-input{flex:1;background:none;border:none;outline:none;color:var(--text-primary);font-size:1rem;font-family:'Inter',sans-serif}
        .search-modal-input::placeholder{color:var(--text-muted)}
        .search-results{max-height:400px;overflow-y:auto}
        .search-result-item{display:block;padding:.85rem 1.25rem;border-bottom:1px solid var(--border);text-decoration:none;transition:background var(--transition)}
        .search-result-item:hover{background:rgba(124,58,237,0.1)}
        .search-result-item:last-child{border-bottom:none}
        .search-result-title{font-size:.9rem;font-weight:500;color:var(--text-primary)}
        .search-result-section{font-size:.75rem;color:var(--text-muted);margin-top:.1rem}
        .search-empty{padding:2rem;text-align:center;color:var(--text-muted);font-size:.9rem}
        .search-modal-footer{padding:.6rem 1.25rem;border-top:1px solid var(--border);display:flex;gap:1rem;align-items:center;font-size:.72rem;color:var(--text-muted)}
        .search-modal-footer kbd{background:var(--bg-code);border:1px solid var(--border);border-radius:4px;padding:.1rem .35rem;font-family:'Fira Code',monospace;font-size:.68rem}
        .sidebar-overlay{display:none;position:fixed;inset:0;background:rgba(0,0,0,0.5);z-index:45}
        .sidebar-overlay.open{display:block}
        #reading-progress{position:fixed;top:var(--topbar-h);left:0;height:2px;background:linear-gradient(90deg,var(--accent),var(--accent-2));width:0%;z-index:150;transition:width .1s}
        .install-strip{background:linear-gradient(135deg,rgba(124,58,237,0.12),rgba(6,182,212,0.08));border:1px solid rgba(124,58,237,0.2);border-radius:var(--radius);padding:.9rem 1.25rem;display:flex;align-items:center;gap:1rem;margin-bottom:2rem;flex-wrap:wrap}
        .install-strip code{font-family:'Fira Code',monospace;font-size:.85rem;color:var(--accent-light);background:none;border:none;padding:0}
        .install-strip-label{font-size:.75rem;color:var(--text-muted)}
        .install-copy-btn{margin-left:auto;background:var(--accent);color:#fff;border:none;border-radius:6px;padding:.3rem .85rem;font-size:.78rem;font-weight:600;cursor:pointer;font-family:'Inter',sans-serif;transition:opacity var(--transition)}
        .install-copy-btn:hover{opacity:.85}
        @media(max-width:768px){
            .topbar-search{display:none}
            .topbar-section{display:none}
            .topbar-divider{display:none}
            .mobile-menu-btn{display:flex}
            .sidebar{transform:translateX(-100%)}
            .sidebar.open{transform:translateX(0)}
            .main{margin-left:0}
            .content-wrapper{padding:1.75rem 1.25rem 5rem}
            .doc-content h1{font-size:1.65rem}
            .doc-nav{grid-template-columns:1fr}
            .doc-nav-link.next{text-align:left;margin-left:0}
        }
        ::-webkit-scrollbar{width:6px;height:6px}
        ::-webkit-scrollbar-track{background:transparent}
        ::-webkit-scrollbar-thumb{background:rgba(255,255,255,0.1);border-radius:3px}
        ::-webkit-scrollbar-thumb:hover{background:rgba(255,255,255,0.2)}
        ::selection{background:rgba(124,58,237,0.35);color:var(--text-primary)}
        .doc-content h2[id],.doc-content h3[id]{scroll-margin-top:calc(var(--topbar-h) + 1rem)}
    </style>
</head>
<body>
<div id="reading-progress"></div>

<header class="topbar">
    <button class="mobile-menu-btn" id="menuBtn" aria-label="Menu">&#9776;</button>
    <a href="/" class="topbar-logo">
        <div class="topbar-logo-badge">LCK</div>
        LaraCoreKit
    </a>
    <div class="topbar-divider"></div>
    <span class="topbar-section">Docs</span>
    <div class="topbar-spacer"></div>
    <div class="topbar-search" id="searchTrigger" role="button" tabindex="0" aria-label="Search documentation">
        <span class="search-icon">&#x2315;</span>
        <input type="text" placeholder="Search docs..." readonly id="searchInput" aria-label="Search">
        <span class="search-kbd">Ctrl+K</span>
    </div>
    <button class="btn-install" id="installBtn">
        Install
    </button>
</header>

<div class="search-overlay" id="searchOverlay" role="dialog" aria-modal="true" aria-label="Search documentation">
    <div class="search-modal">
        <div class="search-modal-input-wrap">
            <span style="color:var(--text-muted);font-size:1rem;">&#x2315;</span>
            <input type="text" class="search-modal-input" id="searchModalInput" placeholder="Search documentation..." autocomplete="off" aria-label="Search query">
            <button id="closeSearchBtn" style="background:none;border:none;color:var(--text-muted);cursor:pointer;font-size:1.1rem;">&#x2715;</button>
        </div>
        <div class="search-results" id="searchResults"></div>
        <div class="search-modal-footer">
            <span><kbd>&#8593;&#8595;</kbd> navigate</span>
            <span><kbd>&#8629;</kbd> select</span>
            <span><kbd>Esc</kbd> close</span>
        </div>
    </div>
</div>

<div class="sidebar-overlay" id="sidebarOverlay"></div>

<div class="layout">
    <nav class="sidebar" id="sidebar" aria-label="Documentation navigation">
        <?php foreach($sidebar as $groupName => $group): ?>
        <div class="sidebar-group">
            <div class="sidebar-group-title">
                <?php echo $group['icon'] ?? ''; ?> <?php echo $groupName; ?>
            </div>
            <?php foreach($group['items'] as $item): ?>
            <a href="<?php echo route('docs.show', ['page' => $item['slug']]); ?>"
               class="sidebar-item <?php echo ($page === $item['slug']) ? 'active' : ''; ?>">
                <?php echo $item['title']; ?>
            </a>
            <?php endforeach; ?>
        </div>
        <?php endforeach; ?>
    </nav>

    <main class="main">
        <div class="content-wrapper">

            <?php if(in_array($page, ['introduction', 'quick-start'])): ?>
            <div class="install-strip">
                <div>
                    <div class="install-strip-label">Get started fast</div>
                    <code>git clone https://github.com/ProgrammerNomad/LaraCoreKit.git</code>
                </div>
                <button class="install-copy-btn" id="installCopyBtn">Copy</button>
            </div>
            <?php endif; ?>

            <nav class="breadcrumb" aria-label="Breadcrumb">
                <a href="<?php echo route('docs.index'); ?>">Docs</a>
                <?php if(count($breadcrumb) > 1): ?>
                    <?php foreach($breadcrumb as $crumb): ?>
                    <span class="breadcrumb-sep">&#8250;</span>
                    <?php if(!empty($crumb['slug'])): ?>
                    <span><?php echo $crumb['title']; ?></span>
                    <?php else: ?>
                    <span style="color:var(--text-secondary)"><?php echo $crumb['title']; ?></span>
                    <?php endif; ?>
                    <?php endforeach; ?>
                <?php else: ?>
                    <span class="breadcrumb-sep">&#8250;</span>
                    <span><?php echo $breadcrumb[0]['title'] ?? ''; ?></span>
                <?php endif; ?>
            </nav>

            <?php if(!empty($meta)): ?>
            <div class="doc-meta">
                <?php if(isset($meta['time'])): ?>
                <div class="doc-meta-badge">Estimated time: <span><?php echo $meta['time']; ?></span></div>
                <?php endif; ?>
                <?php if(isset($meta['difficulty'])): ?>
                <div class="doc-meta-badge">Difficulty: <span><?php echo $meta['difficulty']; ?></span></div>
                <?php endif; ?>
            </div>
            <?php endif; ?>

            <article class="doc-content" id="doc-content">
                <?php echo $content; ?>
            </article>

            <?php if($prevPage || $nextPage): ?>
            <nav class="doc-nav" aria-label="Page navigation">
                <?php if($prevPage): ?>
                <a href="<?php echo route('docs.show', ['page' => $prevPage['slug']]); ?>" class="doc-nav-link">
                    <span class="doc-nav-label">&#8592; Previous</span>
                    <span class="doc-nav-title"><?php echo $prevPage['title']; ?></span>
                </a>
                <?php else: ?>
                <div></div>
                <?php endif; ?>
                <?php if($nextPage): ?>
                <a href="<?php echo route('docs.show', ['page' => $nextPage['slug']]); ?>" class="doc-nav-link next">
                    <span class="doc-nav-label">Next &#8594;</span>
                    <span class="doc-nav-title"><?php echo $nextPage['title']; ?></span>
                </a>
                <?php endif; ?>
            </nav>
            <?php endif; ?>

        </div>
    </main>
</div>

<script>
var pages = <?php echo json_encode($searchPages); ?>;

function openSearch() {
    document.getElementById('searchOverlay').classList.add('open');
    document.getElementById('searchModalInput').focus();
    renderResults('');
}
function closeSearch() {
    document.getElementById('searchOverlay').classList.remove('open');
    document.getElementById('searchModalInput').value = '';
}
function renderResults(query) {
    var container = document.getElementById('searchResults');
    var q = query.toLowerCase().trim();
    var filtered = q ? pages.filter(function(p){ return p.title.toLowerCase().indexOf(q) >= 0 || p.slug.toLowerCase().indexOf(q) >= 0; }) : pages;
    if (!filtered.length) {
        container.innerHTML = '<div class="search-empty">No results found.</div>';
        return;
    }
    container.innerHTML = filtered.map(function(p){
        return '<a class="search-result-item" href="/docs/' + p.slug + '"><div class="search-result-title">' + p.title + '</div><div class="search-result-section">' + p.slug + '</div></a>';
    }).join('');
}
document.getElementById('searchTrigger').addEventListener('click', openSearch);
document.getElementById('searchInput').addEventListener('focus', openSearch);
document.getElementById('searchModalInput').addEventListener('input', function(e){ renderResults(e.target.value); });
document.getElementById('searchOverlay').addEventListener('click', function(e){ if(e.target === e.currentTarget) closeSearch(); });
document.getElementById('closeSearchBtn').addEventListener('click', closeSearch);
document.addEventListener('keydown', function(e){
    if ((e.metaKey || e.ctrlKey) && e.key === 'k') { e.preventDefault(); openSearch(); }
    if (e.key === 'Escape') closeSearch();
});

document.getElementById('menuBtn').addEventListener('click', function(){
    document.getElementById('sidebar').classList.toggle('open');
    document.getElementById('sidebarOverlay').classList.toggle('open');
});
document.getElementById('sidebarOverlay').addEventListener('click', function(){
    document.getElementById('sidebar').classList.remove('open');
    document.getElementById('sidebarOverlay').classList.remove('open');
});

document.getElementById('installBtn').addEventListener('click', function(){
    navigator.clipboard.writeText('git clone https://github.com/ProgrammerNomad/LaraCoreKit.git');
});

var installCopyBtn = document.getElementById('installCopyBtn');
if (installCopyBtn) {
    installCopyBtn.addEventListener('click', function(){
        navigator.clipboard.writeText('git clone https://github.com/ProgrammerNomad/LaraCoreKit.git').then(function(){
            installCopyBtn.textContent = 'Copied!';
            setTimeout(function(){ installCopyBtn.textContent = 'Copy'; }, 2000);
        });
    });
}

document.querySelectorAll('.doc-content pre').forEach(function(pre) {
    var btn = document.createElement('button');
    btn.className = 'copy-btn';
    btn.textContent = 'Copy';
    btn.addEventListener('click', function() {
        var code = pre.querySelector('code') ? pre.querySelector('code').innerText : pre.innerText;
        navigator.clipboard.writeText(code).then(function() {
            btn.textContent = 'Copied!';
            btn.classList.add('copied');
            setTimeout(function(){ btn.textContent = 'Copy'; btn.classList.remove('copied'); }, 2000);
        });
    });
    pre.style.position = 'relative';
    pre.appendChild(btn);
});

var progress = document.getElementById('reading-progress');
window.addEventListener('scroll', function(){
    var total = document.documentElement.scrollHeight - window.innerHeight;
    progress.style.width = (total > 0 ? (window.scrollY / total) * 100 : 0) + '%';
});

var activeItem = document.querySelector('.sidebar-item.active');
if (activeItem) activeItem.scrollIntoView({ block: 'nearest', behavior: 'smooth' });

document.querySelectorAll('.doc-content h2, .doc-content h3').forEach(function(h) {
    if (!h.id) {
        h.id = h.textContent.toLowerCase().replace(/[^\w]+/g, '-').replace(/^-|-$/, '');
    }
    var anchor = document.createElement('a');
    anchor.href = '#' + h.id;
    anchor.style.cssText = 'color:var(--text-muted);text-decoration:none;margin-left:.4rem;opacity:0;transition:opacity .2s;font-size:.8em;';
    anchor.textContent = '#';
    h.appendChild(anchor);
    h.addEventListener('mouseenter', function(){ anchor.style.opacity = '1'; });
    h.addEventListener('mouseleave', function(){ anchor.style.opacity = '0'; });
});
</script>
</body>
</html>
