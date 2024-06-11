const servicesSlides = document.querySelectorAll('.servicios--slide');
const juridica = document.querySelector('.servicios--slide.juridica');
const proyectos = document.querySelector('.servicios--slide.proyectos');
const inmobiliaria = document.querySelector('.servicios--slide.inmobiliaria');

const transformSlides = (juridicaTransform, proyectosTransform, inmobiliariaTransform) => {
  juridica.style.transform = juridicaTransform;
  proyectos.style.transform = proyectosTransform;
  inmobiliaria.style.transform = inmobiliariaTransform;
};

const showJuridica = () => {
  transformSlides('translate(0%, 0%)', 'translate(100%, -100%)', 'translate(200%, -200%)');
};

const showProyectos = () => {
  transformSlides('translate(-100%, 0%)', 'translate(0%, -100%)', 'translate(100%, -200%)');
};

const showInmobiliaria = () => {
  transformSlides('translate(-200%, 0%)', 'translate(-100%, -100%)', 'translate(0%, -200%)');
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
        `${selector.split(' ')[0]} .servicios__text`
      );

      tabs.forEach((tab) => {
        tab.classList.remove('active');
      });

      const tab = document.querySelector(
        `.servicios__text--${link.dataset.menu}`
      );
      tab.classList.add('active');
    });
  });
};

addEventListenersToLinks('.juridica .tab-link');
addEventListenersToLinks('.proyectos .tab-link');
addEventListenersToLinks('.inmobiliaria .tab-link');
