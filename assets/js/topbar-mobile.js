document.addEventListener('DOMContentLoaded', function () {
  const mobileUserBtn = document.querySelector('.mobile-user-btn');
  if (!mobileUserBtn) return;

  // Create a small menu element once
  let menu = document.createElement('div');
  menu.className = 'mobile-user-menu';
  menu.style.position = 'absolute';
  menu.style.minWidth = '140px';
  menu.style.background = '#fff';
  menu.style.color = '#000';
  menu.style.border = '1px solid rgba(0,0,0,0.08)';
  menu.style.borderRadius = '6px';
  menu.style.boxShadow = '0 4px 12px rgba(0,0,0,0.12)';
  menu.style.padding = '6px 0';
  menu.style.zIndex = 3000;
  menu.style.display = 'none';

  menu.innerHTML = `
    <a href="#" class="dropdown-item" style="display:block;padding:8px 12px;color:#111;text-decoration:none;">Profile</a>
    <a href="#" class="dropdown-item" style="display:block;padding:8px 12px;color:#111;text-decoration:none;">Settings</a>
    <div style="height:1px;background:#eee;margin:6px 0;"></div>
    <a href="#" class="dropdown-item" style="display:block;padding:8px 12px;color:#111;text-decoration:none;">Logout</a>
  `;

  document.body.appendChild(menu);

  function openMenu() {
    const rect = mobileUserBtn.getBoundingClientRect();
    // position below and aligned to right edge of the icon
    menu.style.left = (rect.right - menu.offsetWidth) + 'px';
    menu.style.top = (rect.bottom + 8) + 'px';
    menu.style.display = 'block';
  }

  function closeMenu() {
    menu.style.display = 'none';
  }

  mobileUserBtn.addEventListener('click', function (e) {
    e.stopPropagation();
    if (menu.style.display === 'block') {
      closeMenu();
    } else {
      // compute width before placing
      menu.style.display = 'block';
      // allow reflow to get offsetWidth
      requestAnimationFrame(() => {
        openMenu();
      });
    }
  });

  // Close when clicking outside
  document.addEventListener('click', function (e) {
    if (!menu.contains(e.target) && !mobileUserBtn.contains(e.target)) {
      closeMenu();
    }
  });
});
