<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">

<style>
  #countdown {
    position: relative;
    display: flex;
    pointer-events: none;
    user-select: none;
    color: var(--color-1);
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }

  #countdown > h1 {
    font-size: 1.5em;
    letter-spacing: -0.05em;
    color: #2a2a2a;
  }

  #countdown > p {
    color: #8a8a8a;
  }

  #countdown > p {
    font-size: 1em;
    font-weight: normal;
    letter-spacing: 0;
    margin-top: 2em;
  }

  #countdown > time {
    font-family: Abel;
    font-size: 1em;
    font-weight: bold;
    letter-spacing: 0;
    margin-top: 2em;
  }

  .countdown__container {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1em;
    align-items: center;
    justify-content: center;
    margin-top: 3em;
  }

  .countdown__el {
    display: flex;
    justify-content: center;
    text-align: center;
    flex-direction: column;
    align-self: flex-start;
    align-items: center;
    position: relative;
    width: 62px;
  }

  .countdown__time {
    border-radius: 5px;
    box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.5);
    display: flex;
    justify-content: center;
    text-align: center;
    position: relative;
    max-width: 70px;
    width: 100%;
    border-radius: 5px;

    -webkit-perspective: 479px;
    -moz-perspective: 479px;
    -ms-perspective: 479px;
    -o-perspective: 479px;
    perspective: 479px;

    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    -ms-backface-visibility: hidden;
    -o-backface-visibility: hidden;
    backface-visibility: hidden;

    -webkit-transform: translateZ(0);
    -moz-transform: translateZ(0);
    -ms-transform: translateZ(0);
    -o-transform: translateZ(0);
    transform: translateZ(0);

    -webkit-transform: translate3d(0, 0, 0);
    -moz-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    -o-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    background-color: white;
  }

  .countdown__time .count {
    background: var(--background-count);
    color: var(--color-count);
    display: block;
    font-family: "Montserrat", sans-serif;
    font-size: 40px;
    height: 95px;
    line-height: 2.4em;
    overflow: hidden;
    position: absolute;
    text-align: center;
    width: 100%;

    -webkit-transform: translateZ(0);
    -moz-transform: translateZ(0);
    -ms-transform: translateZ(0);
    -o-transform: translateZ(0);
    transform: translateZ(0);

    -webkit-transform-style: flat;
    -moz-transform-style: flat;
    -ms-transform-style: flat;
    -o-transform-style: flat;
    transform-style: flat;
  }

  .countdown__time .count.top {
    border-top: 1px solid rgba(255, 255, 255, 0.2);
    border-bottom: 1px solid var(--border-color);
    border-radius: 5px 5px 0 0;
    height: 50%;

    -webkit-transform-origin: 50% 100%;
    -moz-transform-origin: 50% 100%;
    -ms-transform-origin: 50% 100%;
    -o-transform-origin: 50% 100%;
    transform-origin: 50% 100%;
  }

  .countdown__time .count.bottom {
    background-image: linear-gradient(rgba(255, 255, 255, 0.1), transparent);
    background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0.1),
    transparent);
    background-image: -moz-linear-gradient(rgba(255, 255, 255, 0.1), transparent);
    background-image: -ms-linear-gradient(rgba(255, 255, 255, 0.1), transparent);
    background-image: -o-linear-gradient(rgba(255, 255, 255, 0.1), transparent);
    border-top: 1px solid var(--border-color);
    /*border-bottom: 1px solid #000;*/
    border-radius: 0 0 5px 5px;
    line-height: 0;
    height: 50%;
    top: 50%;

    -webkit-transform-origin: 50% 0;
    -moz-transform-origin: 50% 0;
    -ms-transform-origin: 50% 0;
    -o-transform-origin: 50% 0;
    transform-origin: 50% 0;
  }

  .countdown__el .countdown__label {
    font-size: normal;
    margin-top: 15px;
    display: flex;
    justify-content: center;
    top: 95px;
    width: 100%;
    color: white;
  }

  /* Animation start */
  .count.curr.top {
    -webkit-transform: rotateX(0deg);
    -moz-transform: rotateX(0deg);
    -ms-transform: rotateX(0deg);
    -o-transform: rotateX(0deg);
    transform: rotateX(0deg);
    z-index: 3;
  }

  .count.next.bottom {
    -webkit-transform: rotateX(90deg);
    -moz-transform: rotateX(90deg);
    -ms-transform: rotateX(90deg);
    -o-transform: rotateX(90deg);
    transform: rotateX(90deg);
    z-index: 2;
  }

  .flip .count.curr.top {
    -webkit-transition: all 250ms ease-in-out;
    -moz-transition: all 250ms ease-in-out;
    -ms-transition: all 250ms ease-in-out;
    -o-transition: all 250ms ease-in-out;
    transition: all 250ms ease-in-out;
    -webkit-transform: rotateX(-90deg);
    -moz-transform: rotateX(-90deg);
    -ms-transform: rotateX(-90deg);
    -o-transform: rotateX(-90deg);
    transform: rotateX(-90deg);
  }

  .flip .count.next.bottom {
    -webkit-transition: all 250ms ease-in-out 250ms;
    -moz-transition: all 250ms ease-in-out 250ms;
    -ms-transition: all 250ms ease-in-out 250ms;
    -o-transition: all 250ms ease-in-out 250ms;
    transition: all 250ms ease-in-out 250ms;

    -webkit-transform: rotateX(0deg);
    -moz-transform: rotateX(0deg);
    -ms-transform: rotateX(0deg);
    -o-transform: rotateX(0deg);
    transform: rotateX(0deg);
  }

  @media screen and (max-width: 600px) {
    .countdown__container {
      grid-template-columns: repeat(2, 1fr);
    }
  }
  
  .w3s-pathfinder.-teaser > .-inner-wrapper:after {
  clear: both;
}
.w3s-pathfinder.-teaser > .-inner-wrapper > .-main-section {
  position: relative;
  display: block;
  width: 100%;
  margin: 0 auto;
}
.w3s-pathfinder.-teaser > .-inner-wrapper > .-main-section:before, .w3s-pathfinder.-teaser > .-inner-wrapper > .-main-section:after {
  content: " ";
  display: table;
}
.w3s-pathfinder.-teaser > .-inner-wrapper > .-main-section:after {
  clear: both;
}
@media (max-width: 688px) {
  .w3s-pathfinder.-teaser > .-inner-wrapper > .-main-section {
    width: 100%;
    margin-right: 0;
    text-align: center;
    float: left;
  }
}
.w3s-pathfinder.-teaser > .-inner-wrapper > .-main-section > .-inner-wrapper {
  position: relative;
  display: block;
}
@media (max-width: 1640px) {
  .w3s-pathfinder.-teaser > .-inner-wrapper > .-main-section > .-inner-wrapper {
    float: right;
    margin-right: 22.8vw;
  }
}
@media (max-width: 1280px) {
  .w3s-pathfinder.-teaser > .-inner-wrapper > .-main-section > .-inner-wrapper {
    margin-right: 19vw;
  }
}
@media (max-width: 992px) {
  .w3s-pathfinder.-teaser > .-inner-wrapper > .-main-section > .-inner-wrapper {
    float: none;
    margin-right: auto;
  }
}
@media (max-width: 920px) {
  .w3s-pathfinder.-teaser > .-inner-wrapper > .-main-section > .-inner-wrapper {
    float: right;
    margin-right: 27.3vw;
  }
}
@media (max-width: 688px) {
  .w3s-pathfinder.-teaser > .-inner-wrapper > .-main-section > .-inner-wrapper {
    display: inline-block;
    margin-right: auto;
    float: none;
  }
}
.w3s-pathfinder.-teaser > .-inner-wrapper > .-main-section > .-inner-wrapper > .-title {
  position: relative;
  text-align: center;
  color: #FFF4A3;
  font-size: 17px;
  line-height: 22px;
  font-weight: bold;
}
@media (max-width: 688px) {
  .w3s-pathfinder.-teaser > .-inner-wrapper > .-main-section > .-inner-wrapper > .-title {
    font-size: 19px;
    line-height: 25px;
  }
}
.w3s-pathfinder.-teaser > .-inner-wrapper > .-main-section > .-inner-wrapper > .-headline {
  position: relative;
  text-align: center;
  color: #FFFFFF;
  font-size: 26px;
  line-height: 31px;
  font-weight: bold;
}
@media (max-width: 1280px) {
  .w3s-pathfinder.-teaser > .-inner-wrapper > .-main-section > .-inner-wrapper > .-headline {
    font-size: 24px;
  }
}
@media (max-width: 1100px) {
  .w3s-pathfinder.-teaser > .-inner-wrapper > .-main-section > .-inner-wrapper > .-headline {
    font-size: 20px;
  }
}
@media (max-width: 992px) {
  .w3s-pathfinder.-teaser > .-inner-wrapper > .-main-section > .-inner-wrapper > .-headline {
    font-size: 24px;
  }
}
@media (max-width: 920px) {
  .w3s-pathfinder.-teaser > .-inner-wrapper > .-main-section > .-inner-wrapper > .-headline {
    font-size: 22px;
  }
}
@media (max-width: 688px) {
  .w3s-pathfinder.-teaser > .-inner-wrapper > .-main-section > .-inner-wrapper > .-headline {
    font-size: 20px;
  }
}
@media (max-width: 480px) {
  .w3s-pathfinder.-teaser > .-inner-wrapper > .-main-section > .-inner-wrapper > .-headline {
    font-size: 18px;
  }
}
.w3s-pathfinder.-teaser > .-inner-wrapper > .-main-section > .-inner-wrapper > .-body {
  padding-top: 12px;
}
@media (max-width: 688px) {
  .w3s-pathfinder.-teaser > .-inner-wrapper > .-main-section > .-inner-wrapper > .-body {
    padding-top: 22px;
  }
}
.w3s-pathfinder.-teaser > .-inner-wrapper > .-right-side-section {
  position: absolute;
  top: 0;
  right: 0;
  display: block;
  width: 30%;
  min-width: 230px;
  height: 100%;
  text-align: center;
}

  
  
</style>
