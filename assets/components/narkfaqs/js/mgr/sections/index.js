Ext.onReady(function() {
    MODx.load({ xtype: 'narkfaqs-page-home'});
});

NarkFaqs.page.Home = function(config) {
    config = config || {};
    Ext.applyIf(config,{
        components: [{
            xtype: 'narkfaqs-panel-home'
            ,renderTo: 'narkfaqs-panel-home-div'
        }]
    });
    NarkFaqs.page.Home.superclass.constructor.call(this,config);
};
Ext.extend(NarkFaqs.page.Home,MODx.Component);
Ext.reg('narkfaqs-page-home',NarkFaqs.page.Home);