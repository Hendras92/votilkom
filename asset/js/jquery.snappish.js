// Generated by CoffeeScript 1.3.3
(function() {

  $.fn.snappish = function(opts) {
    var $main, $slides, $wrapper, currentSlideNum, inTransition, numberOfSlides, scroll, scrollDistancePerSlide, scrollToSlide, settings, transitionDuration;
    settings = $.extend({}, $.fn.snappish.defaults, opts);
    $wrapper = $(this);
    $main = $(settings.mainSelector);
    $slides = $(settings.slidesSelector);
    numberOfSlides = $slides.length;
    currentSlideNum = 0;
    scrollDistancePerSlide = 100 / numberOfSlides;
    inTransition = false;
    transitionDuration = $main.css('transition-duration').toString();
    if (transitionDuration.match(/s$/)) {
      transitionDuration = transitionDuration.replace(/s$/, '') * 1000;
    } else {
      transitionDuration = transitionDuration.replace(/ms$/, '') * 1;
    }
    $wrapper.addClass('snappish-wrapper');
    $main.addClass('snappish-main');
    $main.addClass("snappish-" + numberOfSlides + "-slides");
    $slides.addClass('snappish-slide');
    scroll = function(direction) {
      var targetSlideNum;
      targetSlideNum = null;
      if (direction === 'down' && currentSlideNum < numberOfSlides - 1) {
        targetSlideNum = currentSlideNum + 1;
      } else if (direction === 'up' && currentSlideNum > 0) {
        targetSlideNum = currentSlideNum - 1;
      }
      if (targetSlideNum != null) {
        return scrollToSlide(targetSlideNum);
      }
    };
    scrollToSlide = function(targetSlideNum) {
      var eventData, targetScrollDistance;
      if (targetSlideNum === currentSlideNum) {
        return;
      }
      inTransition = true;
      targetScrollDistance = targetSlideNum * scrollDistancePerSlide * -1;
      eventData = {
        fromSlideNum: currentSlideNum,
        fromSlide: $slides.eq(currentSlideNum),
        toSlideNum: targetSlideNum,
        toSlide: $slides.eq(targetSlideNum),
        wrapper: $wrapper,
        main: $main,
        transitionDuration: transitionDuration
      };
      $wrapper.trigger('scrollbegin.snappish', eventData);
      $main.css('transform', "translate3d(0," + targetScrollDistance + "%,0)");
      currentSlideNum = targetSlideNum;
      setTimeout(function() {
        return $wrapper.trigger('scrollend.snappish', eventData);
      }, transitionDuration);
      return setTimeout(function() {
        return inTransition = false;
      }, transitionDuration + 300);
    };
    if (settings.mousewheelEnabled) {
      $wrapper.on('mousewheel', function(e, delta, deltaX, deltaY) {
        if (inTransition) {
          return;
        }
        if (deltaY < 0) {
          return scroll('down');
        } else if (deltaY > 0) {
          return scroll('up');
        }
      });
    }
    if (settings.swipeEnabled) {
      $.event.special.swipe.settings.threshold = settings.swipeThreshold;
      $wrapper.on('swipeup', function(e) {
        return scroll('down');
      });
      $wrapper.on('swipedown', function(e) {
        return scroll('up');
      });
    }
    $wrapper.on('scrollup.snappish', function(e) {
      var targetSlideNum;
      targetSlideNum = currentSlideNum - 1;
      if (targetSlideNum >= 0) {
        return scrollToSlide(targetSlideNum);
      }
    });
    $wrapper.on('scrolldown.snappish', function(e) {
      var targetSlideNum;
      targetSlideNum = currentSlideNum + 1;
      if (targetSlideNum < numberOfSlides) {
        return scrollToSlide(targetSlideNum);
      }
    });
    $wrapper.on('scrollto.snappish', function(e, targetSlideNum) {
      return scrollToSlide(targetSlideNum);
    });
    return $wrapper;
  };

  $.fn.snappish.defaults = {
    mainSelector: '.snappish-main',
    slidesSelector: '.snappish-main > *',
    mousewheelEnabled: true,
    swipeEnabled: true,
    swipeThreshold: 0.1
  };

}).call(this);
