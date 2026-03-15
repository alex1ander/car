
  const main = document.querySelector('main');

  // .active для .scroll-snap-section (уже было у тебя)
  const snapSections = document.querySelectorAll('.scroll-snap-section');
  const snapObs = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) entry.target.classList.add('active');
    });
  }, { root: main, threshold: 0.6 });
  snapSections.forEach(el => snapObs.observe(el));