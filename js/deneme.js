// Generated by CoffeeScript 1.3.3
(function() {

  $(function() {
    var $header, $html, $mainContent, $navbar, $navbarList, $navlist, $rows, $window, getPath, idOffsetCache, isFixed, navbarOffsetY, pathname, scrollTo;
    $window = $(window);
    $html = $('html,body');
    $navbar = $('#nav-bar');
    $navbarList = $navbar.find('.nav-bar');
    $navlist = $('#nav-list');
    $header = $('header');
    $rows = $('.row[id]');
    $mainContent = $('.nine');
    getPath = function() {
      return '#' + window.location.pathname.substring(1);
    };
    pathname = getPath();
    scrollTo = function(elem) {
      var $elem, offset;
      if (elem !== '/' && elem !== '#') {
        $elem = $(elem);
        if ($elem.length > 0) {
          offset = $elem.offset().top;
          return $html.stop().animate({
            scrollTop: offset - 40
          }, 500);
        }
      }
    };
    $(this).tooltips();
    navbarOffsetY = -1;
    idOffsetCache = {};
    $window.on('load', function() {
      navbarOffsetY = $navbarList.offset().top;
      return $rows.each(function() {
        var $this;
        $this = $(this);
        return idOffsetCache[$this.attr('id')] = $this.offset().top - 60;
      });
    });
    isFixed = false;
    $window.on('scroll resize', function() {
      var offset, width;
      offset = $window.scrollTop();
      width = $window.width();
      $rows.each(function() {
        var $this, id, limit, rowOffset;
        $this = $(this);
        id = $this.attr('id');
        rowOffset = idOffsetCache[id];
        limit = rowOffset + $this.outerHeight();
        if (offset >= rowOffset && offset < limit) {
          return $('a[href=#' + id + ']').parent().addClass('active');
        } else {
          return $('a[href=#' + id + ']').parent().removeClass('active');
        }
      });
      if (width >= 768 && offset >= navbarOffsetY) {
        if (!isFixed) {
          isFixed = true;
          $navbar.addClass('fixed-nav');
          $navbarList.addClass('slim');
          $header.addClass('fat');
        }
        return $navlist.addClass('fixed-nav-list').css({
          left: $mainContent.offset().left + $mainContent.outerWidth(),
          width: $mainContent.parent().outerWidth() * 0.25
        });
      } else if (isFixed) {
        isFixed = false;
        $navbar.removeClass('fixed-nav');
        $navbarList.removeClass('slim');
        $navlist.removeClass('fixed-nav-list').removeAttr('style');
        return $header.removeClass('fat');
      }
    });
    if (pathname !== '/' && pathname !== '#') {
      scrollTo(pathname);
    }
    $window.on('popstate', function() {
      return scrollTo(getPath());
    });
    return $navbar.on('click', 'a', function(e) {
      var elem;
      e.preventDefault();
      elem = $(this).attr('href');
      history.pushState({}, elem, elem.substring(1));
      return scrollTo(elem);
    });
  });

}).call(this);

