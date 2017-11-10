window.page = {};

(function(window, document, page){

  page.init = function(){
    self.initMenuToggles();
  };

	var self = {

    initMenuToggles: function(){
      $('#menu-toggle').click(self.handleMenuToggle);
    },

    handleMenuToggle: function(event) {
      if(event.target.id === 'menu-toggle' || event.target.parentNode.id === 'menu-toggle'){
        $('#global-nav').toggle();
      }
      else {
      }
    }
  };

})(window, document, window.page);

// initialize js layer
window.page.init();
