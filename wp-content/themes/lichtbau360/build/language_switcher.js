const languageSwitcher = document.querySelectorAll('.language-switcher');

languageSwitcher.forEach((languageSwitcherElement) => {
  languageSwitcherElement.addEventListener('click', () => {
    toggleLanguageSwitcher(languageSwitcherElement);
  });
});

function toggleLanguageSwitcher(languageSwitcher) {
  languageSwitcher.classList.toggle('language-switcher--close');
}
