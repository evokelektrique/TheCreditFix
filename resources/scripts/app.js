import * as bootstrap from "bootstrap";
import Swiper, { Navigation, Pagination } from "swiper";
import "swiper/css";
// import "swiper/css/navigation";
import "swiper/css/pagination";
import NiceSelect from "nice-select2/dist/js/nice-select2";
import "../styles/nice-select2.scss";
import IMask from "imask";

const ProgressBar = require("progressbar.js");

import "../images/full_logo.png";
import "../images/credit_card_repair.png";
import "../images/credit_card_hero.png";
import "../images/credit_card.png";
import "../images/zigzag-content-1.png";
import "../images/avatar_group.png";
import "../images/avatar.png";
import "../images/illustration.png";
import "../images/support.png";
import "../images/cards.png";
import "../images/cards_stacked.png";
import "../images/credit-card-background.png";
import "../images/credit_card_frame.png";
import "../images/features-credit-img-2.png";
import "../images/credit_card_mockup_horizontal.png";

// Temporary
import "../images/Fictional company logo-0.png";
import "../images/Fictional company logo-layers.png";
import "../images/team_member.jpg";

// Slides
const cards_swiper = new Swiper(".swiper-cards", {
  modules: [Pagination],
  slidesPerView: 5,
  speed: 400,
  spaceBetween: 37,
  pagination: {
    el: ".swiper-pagination",
    type: "bullets",
    clickable: true,
  },
  // Responsive breakpoints
  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 1,
      spaceBetween: 17,
    },
    // when window width is >= 480px
    480: {
      slidesPerView: 2,
      spaceBetween: 17,
    },
    // when window width is >= 640px
    640: {
      slidesPerView: 3,
      spaceBetween: 37,
    },
    // when window width is >= 640px
    1000: {
      slidesPerView: 5,
      spaceBetween: 37,
    },
  },
});

const testimonial_swiper = new Swiper(".swiper-testimonial", {
  modules: [Pagination],
  slidesPerView: 1,
  speed: 400,
  spaceBetween: 0,
  pagination: {
    el: ".swiper-pagination",
    type: "bullets",
    clickable: true,
  },
});

const navigational_swiper = new Swiper(".swiper-navigational", {
  modules: [Navigation],
  slidesPerView: 3,
  speed: 400,
  spaceBetween: 32,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    // when window width is >= 480px
    320: {
      slidesPerView: 1,
      spaceBetween: 17,
    },
    480: {
      slidesPerView: 1,
      spaceBetween: 17,
    },
    // when window width is >= 640px
    640: {
      slidesPerView: 2,
      spaceBetween: 37,
    },
    // when window width is >= 640px
    1000: {
      slidesPerView: 3,
      spaceBetween: 37,
    },
  },
});

const select_boxes = document.querySelectorAll(".custom-select");
Array.from(select_boxes).forEach((select) => {
  const options = select.dataset.options || {};

  new NiceSelect(select, options);
});

// Progress bars

const bars = document.querySelectorAll(".custom_circle_bars");
Array.from(bars).forEach((bar) => {
  const text = bar.dataset.text;

  var bar = new ProgressBar.SemiCircle(bar, {
    strokeWidth: 5,
    trailColor: "#eee",
    trailWidth: 5,
    easing: "easeInOut",
    duration: 1400,
    svgStyle: {
      strokeLinecap: "round",
    },
    text: {
      value: "",
      alignToBottom: false,
    },
    from: { color: "#F39C12" },
    to: { color: "#F39C12" },
    // Set default step function for all animate calls
    step: (state, bar) => {
      bar.path.setAttribute("stroke", state.color);
      var value = Math.round(bar.value() * parseInt(text));
      if (value === 0) {
        bar.setText("");
      } else {
        bar.setText(value);
      }

      bar.text.style.color = state.color;
    },
  });
  bar.text.style.fontSize = "30px";
  bar.text.style.fontSize = "30px";
  bar.path.style.strokeLinecap = "round";
  bar.animate(0.7); // Number from 0.0 to 1.0
});

const mask_elements = document.querySelectorAll(".mask_element");
Array.from(mask_elements).forEach((element) => {
  const maskOptions = {
    mask: element.dataset.mask,
  };
  const mask = IMask(element, maskOptions);
});

const mask_number_element = document.querySelectorAll(".mask_number_element");
Array.from(mask_number_element).forEach((element) => {
  const maskOptions = {
    mask: "$num",
    blocks: {
      num: {
        // nested masks are available!
        mask: Number,
        thousandsSeparator: ",",
      },
    },
  };

  const mask = IMask(element, maskOptions);
});
