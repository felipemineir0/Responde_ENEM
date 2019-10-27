/**
 * @license Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function(config) {
    // Define changes to default configuration here. For example:
    // config.language = 'fr';
    // config.uiColor = '#AADC6E';
    config.extraPlugins = 'mediaembed';
    config.height = '200px';
    config.filebrowserImageBrowseUrl = base_url + 'imgadmin/Imagens/add';
    config.toolbarGroups = [
        //{name: 'document', groups: ['mode', 'document', 'doctools']},
        {name: 'insert', groups: ['image']},
        {name: 'clipboard', groups: ['clipboard', 'undo']},
        //{name: 'editing', groups: ['find', 'selection', 'spellchecker']},
        {name: 'editing', groups: ['selection']},
        //{name: 'forms'},
        '/',
        //{name: 'basicstyles', groups: ['basicstyles', 'cleanup']},
        {name: 'basicstyles', groups: ['Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat']},
        {name: 'paragraph', groups: ['list', 'indent', 'blocks', 'align', 'bidi']},
        //{name: 'links'},
        '/',
        {name: 'styles'},
        {name: 'colors'},
        //{name: 'mediaembed'},
        
        //{name: 'tools'},
        //{name: 'others'},
        //{name: 'about'}
    ];
};
