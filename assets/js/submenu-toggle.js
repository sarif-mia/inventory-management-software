document.addEventListener('DOMContentLoaded', function () {
  const sidebar = document.getElementById('sidebar');
  if (!sidebar) return;

  // Helper: given a nav-link element, find its target submenu id.
  function findSubmenuId(link) {
    // Prefer explicit data-submenu attribute
    const data = link.getAttribute('data-submenu');
    if (data) return data;

    // Fallback: look for a class like 'purchase-icon' -> 'purchase-submenu'
    const classes = Array.from(link.classList);
    for (const c of classes) {
      if (c.endsWith('-icon')) {
        return c.replace(/-icon$/, '-submenu');
      }
    }

    // If link has title like 'Shipping', try lowercased title + '-submenu'
    const title = link.getAttribute('title');
    if (title) {
      return title.toLowerCase() + '-submenu';
    }

    return null;
  }

  // Close all submenus helper
  function closeAllSubmenus() {
    const open = document.querySelectorAll('.submenu:not(.d-none)');
    open.forEach(s => s.classList.add('d-none'));
  }

  sidebar.addEventListener('click', function (e) {
    const link = e.target.closest('.nav-link');
    if (!link) return;

    const submenuId = findSubmenuId(link);
    if (!submenuId) return;

    e.preventDefault();
    const submenu = document.getElementById(submenuId);
    if (!submenu) return;

    // Toggle: if hidden, position next to the clicked icon and show; otherwise hide
    if (submenu.classList.contains('d-none')) {
      closeAllSubmenus();
      const sidebarTop = sidebar.getBoundingClientRect().top || 0;
      const iconTop = link.getBoundingClientRect().top;
      submenu.style.top = (iconTop - sidebarTop) + 'px';
      submenu.classList.remove('d-none');
    } else {
      submenu.classList.add('d-none');
    }
  });

  // Close when clicking outside any submenu
  document.addEventListener('click', function (e) {
    if (!sidebar.contains(e.target) && !Array.from(document.querySelectorAll('.submenu')).some(s => s.contains(e.target))) {
      closeAllSubmenus();
    }
  });
});
