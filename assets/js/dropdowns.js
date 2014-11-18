var s,
Dropdowns = {

  settings: {},

  init: function() {
    s = this.settings;

    Dropdowns.bindUIActions();
  },

  bindUIActions: function() {
    $(".button-dropdown").click(function() {
      var $button = $(this).parent();

      if ($button.hasClass('open')) {
          $button.removeClass('open');
      } else {
          $button.addClass('open');
      }
    });

    $(".dropdown").click(function() {
      if ($(this).hasClass('open')) {
        $(this).removeClass('open');
      } else {
        $(this).addClass('open');
      }
    });
  }
};

