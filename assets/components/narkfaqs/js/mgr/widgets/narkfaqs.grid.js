NarkFaqs.grid.NarkFaqs = function(config) {
    config = config || {};
    Ext.applyIf(config,{
        id: 'narkfaqs-grid-narkfaqs'
        ,url: NarkFaqs.config.connectorUrl
        ,baseParams: { action: 'mgr/narkfaq/getList' }
        ,save_action: 'mgr/narkfaq/updateFromGrid'
        ,fields: ['id', 'createdon','question_author','question_header', 'question_text', 'answer_text']
        ,paging: true
        ,autosave: true
        ,remoteSort: true
        ,anchor: '97%'
        ,autoExpandColumn: 'createdon'
        ,columns: [{
            header: _('narkfaqs.id')
            ,dataIndex: 'id'
            ,sortable: true
            ,width: 10
        },{
            header: _('narkfaqs.createdon')
            ,dataIndex: 'createdon'
            ,sortable: true
            ,width: 50
        },{
            header: _('narkfaqs.question_author')
            ,dataIndex: 'question_author'
            ,sortable: true
            ,width: 50
            ,editor: { xtype: 'textfield' }
        },{
            header: _('narkfaqs.question_header')
            ,dataIndex: 'question_header'
            ,sortable: false
            ,width: 100
            ,editor: { xtype: 'textfield' }
        },{
            header: _('narkfaqs.question_text')
            ,dataIndex: 'question_text'
            ,sortable: false
            ,width: 100
            ,editor: { xtype: 'textfield' }
        },{
            header: _('narkfaqs.answer_text')
            ,dataIndex: 'answer_text'
            ,sortable: false
            ,width: 100
            ,editor: { xtype: 'textfield' }
        }]
        ,tbar: [{
            text: _('narkfaqs.narkfaq_create')
            ,handler: { xtype: 'narkfaqs-window-narkfaq-create' ,blankValues: true }
        },'->',{
            xtype: 'textfield'
            ,id: 'narkfaqs-search-filter'
            ,emptyText: _('narkfaqs.search...')
            ,listeners: {
                'change': {fn:this.search,scope:this}
                ,'render': {fn: function(cmp) {
                    new Ext.KeyMap(cmp.getEl(), {
                        key: Ext.EventObject.ENTER
                        ,fn: function() {
                            this.fireEvent('change',this);
                            this.blur();
                            return true;
                        }
                        ,scope: cmp
                    });
                },scope:this}
            }
        }]
    });
    NarkFaqs.grid.NarkFaqs.superclass.constructor.call(this,config)
};
Ext.extend(NarkFaqs.grid.NarkFaqs,MODx.grid.Grid,{
    search: function(tf,nv,ov) {
        var s = this.getStore();
        s.baseParams.query = tf.getValue();
        this.getBottomToolbar().changePage(1);
        this.refresh();
    }
    ,getMenu: function() {
        return [{
            text: _('narkfaqs.narkfaq_update')
            ,handler: this.updateNarkFaq
        },'-',{
            text: _('narkfaqs.narkfaq_remove')
            ,handler: this.removeNarkFaq
        }];
    }
    ,updateNarkFaq: function(btn,e) {
        if (!this.updateNarkFaqWindow) {
            this.updateNarkFaqWindow = MODx.load({
                xtype: 'narkfaqs-window-narkfaq-update'
                ,record: this.menu.record
                ,listeners: {
                    'success': {fn:this.refresh,scope:this}
                }
            });
        }
        this.updateNarkFaqWindow.setValues(this.menu.record);
        this.updateNarkFaqWindow.show(e.target);
    }

    ,removeNarkFaq: function() {
        MODx.msg.confirm({
            title: _('narkfaqs.narkfaq_remove')
            ,text: _('narkfaqs.narkfaq_remove_confirm')
            ,url: this.config.url
            ,params: {
                action: 'mgr/narkfaq/remove'
                ,id: this.menu.record.id
            }
            ,listeners: {
                'success': {fn:this.refresh,scope:this}
            }
        });
    }
});
Ext.reg('narkfaqs-grid-narkfaqs',NarkFaqs.grid.NarkFaqs);


NarkFaqs.window.CreateNarkFaq = function(config) {
    config = config || {};
    Ext.applyIf(config,{
        title: _('narkfaqs.narkfaq_create')
        ,url: NarkFaqs.config.connectorUrl
        ,baseParams: {
            action: 'mgr/narkfaq/create'
        }
        ,fields: [{
            xtype: 'textfield'
            ,fieldLabel: _('narkfaqs.question_author')
            ,name: 'question_author'
            ,anchor: '100%'
        },{
            xtype: 'textfield'
            ,fieldLabel: _('narkfaqs.question_header')
            ,name: 'question_header'
            ,anchor: '100%'
        },{
            xtype: 'textarea'
            ,fieldLabel: _('narkfaqs.question_text')
            ,name: 'question_text'
            ,height: '100'
            ,anchor: '100%'
        },{
            xtype: 'textarea'
            ,fieldLabel: _('narkfaqs.answer_text')
            ,name: 'answer_text'
            ,height: '100'
            ,anchor: '100%'
        }]
    });
    NarkFaqs.window.CreateNarkFaq.superclass.constructor.call(this,config);
};
Ext.extend(NarkFaqs.window.CreateNarkFaq,MODx.Window);
Ext.reg('narkfaqs-window-narkfaq-create',NarkFaqs.window.CreateNarkFaq);


NarkFaqs.window.UpdateNarkFaq = function(config) {
    config = config || {};
    Ext.applyIf(config,{
        title: _('narkfaqs.narkfaq_update')
        ,url: NarkFaqs.config.connectorUrl
        ,baseParams: {
            action: 'mgr/narkfaq/update'
        }
        ,fields: [{
            xtype: 'hidden'
            ,name: 'id'
        },{
            xtype: 'textfield'
            ,fieldLabel: _('narkfaqs.question_author')
            ,name: 'question_author'
            ,anchor: '100%'
        },{
            xtype: 'textfield'
            ,fieldLabel: _('narkfaqs.question_header')
            ,name: 'question_header'
            ,anchor: '100%'
        },{
            xtype: 'textarea'
            ,fieldLabel: _('narkfaqs.question_text')
            ,name: 'question_text'
            ,height: '100'
            ,anchor: '100%'
        },{
            xtype: 'textarea'
            ,fieldLabel: _('narkfaqs.answer_text')
            ,name: 'answer_text'
            ,height: '100'
            ,anchor: '100%'
        }]
    });
    NarkFaqs.window.UpdateNarkFaq.superclass.constructor.call(this,config);
};
Ext.extend(NarkFaqs.window.UpdateNarkFaq,MODx.Window);
Ext.reg('narkfaqs-window-narkfaq-update',NarkFaqs.window.UpdateNarkFaq);