<script>
/* Navigation */
function goto(page) {
  document.querySelectorAll('.page').forEach(p => p.classList.remove('active'));
  document.getElementById('page-' + page).classList.add('active');
  document.querySelectorAll('.nav-links button').forEach(b => {
    b.classList.toggle('active', b.dataset.p === page);
  });
  window.scrollTo({ top: 0, behavior: 'smooth' });
  setTimeout(initReveal, 50);
}

/* Scroll reveal */
function initReveal() {
  const obs = new IntersectionObserver(entries => {
    entries.forEach((e, i) => {
      if (e.isIntersecting) {
        setTimeout(() => e.target.classList.add('vis'), i * 70);
        obs.unobserve(e.target);
      }
    });
  }, { threshold: 0.07, rootMargin: '0px 0px -30px 0px' });
  document.querySelectorAll('.rv:not(.vis)').forEach(el => obs.observe(el));
}
initReveal();

/* Service tabs */
function switchSvc(tab, panelId) {
  document.querySelectorAll('.svc-tab').forEach(t => t.classList.remove('active'));
  document.querySelectorAll('.svc-panel').forEach(p => p.classList.remove('active'));
  tab.classList.add('active');
  document.getElementById(panelId).classList.add('active');
}

/* Form submit */
function submitForm() {
  const btn = document.getElementById('submit-btn');
  btn.textContent = '✓ Inquiry Sent!';
  btn.style.background = '#16a34a';
  btn.disabled = true;
  setTimeout(() => {
    btn.textContent = 'Send Inquiry →';
    btn.style.background = '';
    btn.disabled = false;
  }, 3500);
}

/* Prevent default on anchor clicks for SPA nav */
document.querySelectorAll('a[onclick]').forEach(a => a.addEventListener('click', e => e.preventDefault()));
</script>
<script>
/* Navigation */
function goto(page) {
  document.querySelectorAll('.page').forEach(p => p.classList.remove('active'));
  document.getElementById('page-' + page).classList.add('active');

  document.querySelectorAll('.nav-links button').forEach(b => {
    b.classList.toggle('active', b.dataset.p === page);
  });

  // close mobile menu after click
  const navLinks = document.querySelector('.nav-links');
  const ham = document.getElementById('ham');
  if (navLinks) navLinks.classList.remove('open');
  if (ham) ham.classList.remove('active');

  window.scrollTo({ top: 0, behavior: 'smooth' });
  setTimeout(initReveal, 50);
}

/* Scroll reveal */
function initReveal() {
  const obs = new IntersectionObserver(entries => {
    entries.forEach((e, i) => {
      if (e.isIntersecting) {
        setTimeout(() => e.target.classList.add('vis'), i * 70);
        obs.unobserve(e.target);
      }
    });
  }, { threshold: 0.07, rootMargin: '0px 0px -30px 0px' });

  document.querySelectorAll('.rv:not(.vis)').forEach(el => obs.observe(el));
}
initReveal();

/* Service tabs */
function switchSvc(tab, panelId) {
  document.querySelectorAll('.svc-tab').forEach(t => t.classList.remove('active'));
  document.querySelectorAll('.svc-panel').forEach(p => p.classList.remove('active'));
  tab.classList.add('active');
  document.getElementById(panelId).classList.add('active');
}

/* Form submit */
function submitForm() {
  const btn = document.getElementById('submit-btn');
  btn.textContent = '✓ Inquiry Sent!';
  btn.style.background = '#16a34a';
  btn.disabled = true;

  setTimeout(() => {
    btn.textContent = 'Send Inquiry →';
    btn.style.background = '';
    btn.disabled = false;
  }, 3500);
}

/* Burger menu */
const ham = document.getElementById('ham');
const navLinks = document.querySelector('.nav-links');

if (ham && navLinks) {
  ham.addEventListener('click', function () {
    navLinks.classList.toggle('open');
  });
}

/* Prevent default on anchor clicks for SPA nav */
document.querySelectorAll('a[onclick]').forEach(a => {
  a.addEventListener('click', e => e.preventDefault());
});
</script>