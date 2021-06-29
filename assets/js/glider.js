function slider(){
  const slider = document.querySelectorAll('.slide');
  const timer = 1000; //seting timer
  slider[0].style.display = 'block';
  bullets = sliderBulletsCreation(slider);
  sliderLoop(slider, timer, bullets);
};

function sliderLoop(slider, timer, bullets){
  var timeoutFunction = [];
  for (var i = 0; slide = slider[i] && (i < slider.length); i++) {
    timeoutFunction.push(setTimeout(sliderAnim.bind(null, slider, i, timer, bullets), i*timer));
  };
  bullets.forEach(function(bullet, index){
    bullet.addEventListener("click", function(event){
      console.log(index);
      timeoutFunction.forEach(function(element){
        clearTimeout(element);
      });
      var t=0;
      for (var i = index; slide = slider[i] && (i < slider.length); i++) {
        timeoutFunction.push(setTimeout(sliderAnim.bind(null, slider, i, timer, bullets), t*timer));
        t++;
      };
    })
  })
};

function sliderAnim(slider, i, timer, bullets){
  slider.forEach(function(slide){
    slide.style.display = 'none';
  })
  bullets.forEach(function(bullet){
    bullet.style.backgroundColor = "#e5e5e5";
  })
  slider[i].style.display = 'inline-block';
  bullets[i].style.backgroundColor = "#1E90FF";
  if (i == (slider.length - 1)){setTimeout(sliderLoop.bind(null,slider, timer, bullets), timer)};
};

function sliderBulletsCreation(slider){
  const sliderContainer = document.querySelector('.slider');
  const length = slider.length;
  const bullets = [];
  for (var i = 0; slide = slider[i] && (i < slider.length); i++) {
    var bullet = document.createElement("div");
    bullet.classList.add('slider-bullet');
    bullet.style.right = 20 + (i * 20) + 'px';
    sliderContainer.appendChild(bullet);
    bullets.push(bullet);
  }
  return bullets;
};

slider();