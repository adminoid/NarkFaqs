NarkFaqs.panel.Home = function(config) {
    config = config || {};
    Ext.apply(config,{
        border: false
        ,baseCls: 'modx-formpanel'
        ,cls: 'container'
        ,items: [{
            html: '<h2>'+_('narkfaqs.management')+'</h2>'
            ,border: false
            ,cls: 'modx-page-header'
        },{
            xtype: 'modx-tabs'
            ,defaults: { border: false ,autoHeight: true }
            ,border: true
            ,items: [{
                title: _('narkfaqs')
                ,defaults: { autoHeight: true }
                ,items: [{
                    html: '<p>'+_('narkfaqs.management_desc')+'</p>'
                    ,border: false
                    ,bodyCssClass: 'panel-desc'
                },{
                    xtype: 'narkfaqs-grid-narkfaqs'
                    ,cls: 'main-wrapper'
                    ,preventRender: true
                }]
            }]
        }]
    });
    NarkFaqs.panel.Home.superclass.constructor.call(this,config);
};
Ext.extend(NarkFaqs.panel.Home,MODx.Panel);
Ext.reg('narkfaqs-panel-home',NarkFaqs.panel.Home);
