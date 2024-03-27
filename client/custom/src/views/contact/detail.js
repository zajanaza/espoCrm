Espo.define('custom:views/contact/detail', 'views/detail', function(Dep){
  return Dep.extend({
    setup: function() {
      Dep.prototype.setup.call(this);

      this.addMenuItem('buttons', {
        name: 'searchInGoogle',
        label: 'Search in Google',
        style: 'primary',
        acl: 'edit',
        action: 'searchInGoogle'
      }, true);
    },

    actionSearchInGoogle: function() {
      this.notify('Please wait...');
      var name = this.model.get('firstName') + ' ' + this.model.get('lastName');
      var url_param = 'https://www.google.com/search?q=' + encodeURIComponent(name);

      window.open(url_param);
      this.notify(false);
    }
  });
});