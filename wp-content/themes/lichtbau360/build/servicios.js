const servicesSlides = document.querySelectorAll('.servicios--slide');
const juridica = document.querySelector('.servicios--slide.slide-1');
const proyectos = document.querySelector('.servicios--slide.slide-2');
const inmobiliaria = document.querySelector('.servicios--slide.slide-3');

const transformSlides = (
  juridicaTransform,
  proyectosTransform,
  inmobiliariaTransform
) => {
  juridica.style.transform = juridicaTransform;
  proyectos.style.transform = proyectosTransform;
  inmobiliaria.style.transform = inmobiliariaTransform;
};

const showJuridica = () => {
  transformSlides(
    'translate(0%, 0%)',
    'translate(100%, 0%)',
    'translate(200%, 0%)'
  );
};

const showProyectos = () => {
  transformSlides(
    'translate(-100%, 0%)',
    'translate(0%, 0%)',
    'translate(100%, 0%)'
  );
};

const showInmobiliaria = () => {
  transformSlides(
    'translate(-200%, 0%)',
    'translate(-100%, 0%)',
    'translate(0%, 0%)'
  );
};

document.addEventListener('DOMContentLoaded', () => {
  showProyectos();
});

/* ---------------------------------- */

const clearActiveLinks = (links) => {
  links.forEach((link) => {
    link.classList.remove('active');
  });
};

const addEventListenersToLinks = (selector) => {
  const textLinks = document.querySelectorAll(selector);

  textLinks.forEach((link) => {
    link.addEventListener('click', (e) => {
      e.preventDefault();
      clearActiveLinks(textLinks);
      link.classList.add('active');

      const tabs = document.querySelectorAll(
        `${selector.split(' ')[0]} .servicio-wrapper`
      );

      tabs.forEach((tab) => {
        tab.classList.remove('active');
      });

      const tab = document.querySelector(
        `.servicio-wrapper--${link.dataset.menu}`
      );
      tab.classList.add('active');
    });
  });
};

addEventListenersToLinks('.slide-1 .tab-link');
addEventListenersToLinks('.slide-2 .tab-link');
addEventListenersToLinks('.slide-3 .tab-link');
