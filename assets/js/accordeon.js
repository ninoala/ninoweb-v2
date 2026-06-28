const faqItems = document.querySelectorAll(".faq-item");

function closeFaqItem(item) {
  const button = item.querySelector(".faq-question");
  const answer = item.querySelector(".faq-answer");

  item.classList.remove("is-open");
  button.setAttribute("aria-expanded", "false");
  answer.style.maxHeight = null;
}

function openFaqItem(item) {
  const button = item.querySelector(".faq-question");
  const answer = item.querySelector(".faq-answer");

  item.classList.add("is-open");
  button.setAttribute("aria-expanded", "true");
  answer.style.maxHeight = `${answer.scrollHeight}px`;
}

faqItems.forEach((item) => {
  const button = item.querySelector(".faq-question");

  button.addEventListener("click", () => {
    const isOpen = item.classList.contains("is-open");

    faqItems.forEach((otherItem) => {
      if (otherItem !== item) {
        closeFaqItem(otherItem);
      }
    });

    if (isOpen) {
      closeFaqItem(item);
    } else {
      openFaqItem(item);
    }
  });
});

const initiallyOpenFaq = document.querySelector(".faq-item.is-open");

if (initiallyOpenFaq) {
  openFaqItem(initiallyOpenFaq);
}

window.addEventListener("resize", () => {
  const openFaq = document.querySelector(".faq-item.is-open");

  if (openFaq) {
    const answer = openFaq.querySelector(".faq-answer");
    answer.style.maxHeight = `${answer.scrollHeight}px`;
  }
});
