(function() {
    tinymce.create('tinymce.plugins.WPTuts', {
        /**
         * Initializes the plugin, this will be executed after the plugin has been created.
         * This call is done before the editor instance has finished it's initialization so use the onInit event
         * of the editor instance to intercept that event.
         *
         * @param {tinymce.Editor} ed Editor instance that the plugin is initialized in.
         * @param {string} url Absolute URL to where the plugin is located.
         */
        // init : function(ed, url) {
        //     ed.addCommand('g10Submit', function() {
        //         var selected_text = ed.selection.getContent();
        //         var return_text = '';
        //         return_text = '<img src="../wp-content/themes/cassiopeia/images/g10Submit.png" />';
        //         ed.execCommand('mceInsertContent', 0, return_text);
        //     });

        //     ed.addCommand('showrecent', function() {
        //         var number = prompt("How many posts you want to show ? "), 
        //             shortcode;
        //         if (number !== null) {
        //             number = parseInt(number);
        //             if (number > 0 && number <= 20) {
        //                 shortcode = '[recent-posts numbers="' + number + '"/]';
        //                 ed.execCommand('mceInsertContent', 0, shortcode);
        //             } else {
        //                 alert("The number value is invalid. It should be from 0 to 20.");
        //             }
        //         }      
        //     });

        //     ed.addButton('dropcap', {
        //         title : 'DropCap',
        //         cmd : 'dropcap',
        //         image : url + '/dropcap.png'
        //     });

        //     ed.addButton('showrecent', {
        //         title : 'Add recent posts shortcode',
        //         cmd : 'showrecent',
        //         image : url + '/recent.png'
        //     });

         // },

        /**
         * Creates control instances based in the incomming name. This method is normally not
         * needed since the addButton method of the tinymce.Editor class is a more easy way of adding buttons
         * but you sometimes need to create more complex controls like listboxes, split buttons etc then this
         * method can be used to create those.
         *
         * @param {String} n Name of the control to create.
         * @param {tinymce.ControlManager} cm Control manager to use inorder to create new control.
         * @return {tinymce.ui.Control} New control instance or null if no control was created.
         */
        createControl : function(n, cm) {
            if (n=='g10Shortcodes'){
                var mlb = cm.createListBox('<?php echo $shortcodesES->buttonName; ?>List', {
                     title : 'G10 Shortcodes',
                     onselect : function(v) { //Option value as parameter
                        if(tinyMCE.activeEditor.selection.getContent() != ''){
                            tinyMCE.activeEditor.selection.setContent('[' + v + ']' + tinyMCE.activeEditor.selection.getContent() + '[/' + v + ']');
                        }
                        else{
                            tinyMCE.activeEditor.selection.setContent('[' + v + ']');
                        }
                     }
                });

                mlb.add('Add Button', 'g10Add');
                mlb.add('Clear Button', 'g10Clear');
                mlb.add('Delete Button', 'g10Delete');
                mlb.add('Edit Button', 'g10Edit');
                mlb.add('Reload Grid Button', 'g10ReloadGrid');
                mlb.add('Run Report Button', 'g10RunReport');
                mlb.add('Save Button', 'g10Save');
                mlb.add('Search Button', 'g10Search');
                mlb.add('Submit Button', 'g10Submit');
                mlb.add('Next Page', 'next_page');
                mlb.add('Previous Page', 'previous_page');
                return mlb;
            }


            return null;
        },

        /**
         * Returns information about the plugin as a name/value array.
         * The current keys are longname, author, authorurl, infourl and version.
         *
         * @return {Object} Name/value array containing information about the plugin.
         */
        getInfo : function() {
            return {
                    longname : 'G10 Shortcodes',
                    author : 'bemed',
                    authorurl : 'http://generation10.net',
                    infourl : 'http://generation10.net',
                    version : "0.2"
            };
        }
    });

    // Register plugin
    tinymce.PluginManager.add('wptuts', tinymce.plugins.WPTuts);
})();
