define('custom:najit-kontakt', ['action-handler'], function (Dep) {

  return Dep.extend({

    actionNajitKontakt: function () {     
    var collectionContact = new Backbone.Collection();    
    var emailLead;
  
      Espo.Ajax.getRequest('Contact')
          .then(response => { 
              response.list.forEach(function(item){
                  collectionContact.add(item);
              });               
              Espo.Ajax.getRequest('Lead/' + this.view.model.id)
                  .then(response => {                        
                      emailLead = response.emailAddress;
                      collectionContact.forEach(function (item){
                          var email = item.toJSON().emailAddress;
                          if (email == emailLead) {
                              console.log("Jmenuju se: " + item.toJSON().firstName + " a mám stejný email");
                          };
                      });                       
                  });
          });
    }
  });
});