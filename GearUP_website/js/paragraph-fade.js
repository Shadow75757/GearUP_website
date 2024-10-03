  // Get the container element with the "anim" class
  const container = document.querySelector('.anim');

  // Get all the <p> elements within the container
  const paragraphs = container.querySelectorAll('p');

  // Function to check if an element is in the viewport
  function isElementInViewport(el) {
    const rect = el.getBoundingClientRect();
    return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
  }

  // Function to handle the scroll event
  function handleScroll() {
    paragraphs.forEach((paragraph) => {
      if (isElementInViewport(paragraph)) {
        paragraph.classList.add('fade-in');
      } else {
        paragraph.classList.remove('fade-in');
      }
    });
  }

  // Add scroll event listener
  window.addEventListener('scroll', handleScroll);