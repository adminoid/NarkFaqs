var NarkFaqs = function(config) {
    config = config || {};
    NarkFaqs.superclass.constructor.call(this,config);
};
Ext.extend(NarkFaqs,Ext.Component,{
    page:{},window:{},grid:{},tree:{},panel:{},combo:{},config: {}
});
Ext.reg('narkfaqs',NarkFaqs);

NarkFaqs = new NarkFaqs();