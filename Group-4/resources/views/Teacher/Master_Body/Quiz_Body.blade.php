<div class="quiz">

    <div class="quiz_title">
        <span>Quiz Setting</span>
    </div>

    <div class="quiz_name">
        <div class="q_name">
            <span>Quiz Name</span>
        </div>
        <div class="text_field">
            <input type="text" placeholder="Enter Quiz Title" name="field" value="{{ $quiz_data->Quiz_Title }}" >
        </div>
    </div>

    <div class="quiz_name">
        <div class="q_name">
            <span>Quiz Discription</span>
        </div>
        <div class="text_field_1">
            {{-- <textarea name="question1" id="editor" cols="30" rows="10">{!! $quiz_data->Quiz_Description !!}</textarea> --}}
            <!-- <textarea name="dis" id="editor" cols="30" rows="10"></textarea> -->
        </div>
    </div>
    <div class="time_start">

        <div class="start_title">
            <span>Start Time</span>
        </div>

        <div class="inner_details">

            <div class="date">
                <select name="" id="" title="Date">
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                </select>
            </div>

            <div class="date">
                <select name="" id="" title="Mounth">
                    <option value="">January</option>
                    <option value="">February</option>
                    <option value="">March</option>
                    <option value="">Apile</option>
                </select>
            </div>

            <div class="date" title="Year">
                <select name="" id="">
                    <option value="">2022</option>
                    <option value="">2023</option>
                    <option value="">2024</option>
                    <option value="">2025</option>
                </select>
            </div>

            <div class="date">
                <select name="" id="" title="Hour">
                    <option value="">00</option>
                    <option value="">01</option>
                    <option value="">02</option>
                    <option value="">03</option>
                </select>
            </div>

            <div class="date">
                <select name="" id="" title="Minutes">
                    <option value="">01</option>
                    <option value="">02</option>
                    <option value="">03</option>
                    <option value="">04</option>
                </select>
            </div>

        </div>

    </div>

    <div class="time_end">

        <div class="start_title">
            <span>End Time</span>
        </div>

        <div class="inner_details">

            <div class="date">
                <select name="" id="">
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                </select>
            </div>

            <div class="date">
                <select name="" id="">
                    <option value="">January</option>
                    <option value="">February</option>
                    <option value="">March</option>
                    <option value="">Apile</option>
                </select>
            </div>

            <div class="date">
                <select name="" id="">
                    <option value="">2022</option>
                    <option value="">2023</option>
                    <option value="">2024</option>
                    <option value="">2025</option>
                </select>
            </div>

            <div class="date">
                <select name="" id="">
                    <option value="">00</option>
                    <option value="">01</option>
                    <option value="">02</option>
                    <option value="">03</option>
                </select>
            </div>

            <div class="date">
                <select name="" id="">
                    <option value="">01</option>
                    <option value="">02</option>
                    <option value="">03</option>
                    <option value="">04</option>
                </select>
            </div>

        </div>
    </div>

    <div class="time_limit">

        <div class="start_title">
            <span>Time Limit</span>
        </div>

        <div class="date_inner">


            <div class="date">
                <select name="" id="">
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                </select>
            </div>

            <div class="date">
                <select name="" id="">
                    <option value="">Hour</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                </select>
            </div> 

        </div>

    </div>

    <div class="number_of_quection">

        <div class="number_title">
            <span>Number of Quections</span>
        </div>

        <div class="text_number">
            <input type="number" value="{{ $quiz_data->Number_of_quictions }}">
        </div>
    </div>

    <div class="line"></div>

    {{-- @foreach ($number_1 as $item) --}}

    <form action="{{ url('Quiz_store/'.$class_id.'/'.$activity.'/'.$quiz_data->id) }}" method="POST">

        @csrf
        @for ($i = 3; $i < $quiz_data->Number_of_Quection+3; $i++)

            <div class="activies">


                <div class="quiz_name">
                    <div class="q_name">
                        <span>1. Quection Discription</span>
                    </div>

                    
                    <div class="text_field_1">
                            <textarea name="editor{{ $i }}" id="editor{{ $i }}" cols="30" rows="10"></textarea>
                            <script>
                                CKEDITOR.ClassicEditor.create(document.querySelector('#editor{{ $i }}'), {

                                        toolbar: {
                                            items: [
                                                'heading', '|',
                                                'bold', 'italic', 'underline', 'subscript', 'superscript', 'removeFormat', '|',
                                                'bulletedList', 'numberedList','|',
                                                'outdent', 'indent', '|',
                                                '-',
                                                'fontSize', 'fontFamily', 'fontColor',  '|',
                                                'alignment', '|',
                                                'specialCharacters', 'horizontalLine', '|',
                                                'textPartLanguage', '|',
                                                
                                            ],
                                            shouldNotGroupWhenFull: true
                                        },
                                        // Changing the language of the interface requires loading the language file using the <script> tag.
                                        // language: 'es',
                                        list: {
                                            properties: {
                                                styles: true,
                                                startIndex: true,
                                                reversed: true
                                            }
                                        },
                                        // https://ckeditor.com/docs/ckeditor5/latest/features/headings.html#configuration
                                        heading: {
                                            options: [
                                                { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                                                { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                                                { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                                                { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                                                { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                                                { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
                                                { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
                                            ]
                                        },
                                        // https://ckeditor.com/docs/ckeditor5/latest/features/editor-placeholder.html#using-the-editor-configuration
                                        placeholder: 'Enter Class Prograss',
                                        // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-family-feature
                                        fontFamily: {
                                            options: [
                                                'default',
                                                'Arial, Helvetica, sans-serif',
                                                'Courier New, Courier, monospace',
                                                'Georgia, serif',
                                                'Lucida Sans Unicode, Lucida Grande, sans-serif',
                                                'Tahoma, Geneva, sans-serif',
                                                'Times New Roman, Times, serif',
                                                'Trebuchet MS, Helvetica, sans-serif',
                                                'Verdana, Geneva, sans-serif'
                                            ],
                                            supportAllValues: true
                                        },
                                        // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-size-feature
                                        fontSize: {
                                            options: [ 10, 12, 14, 'default', 18, 20, 22 ],
                                            supportAllValues: true
                                        },
                                        // Be careful with the setting below. It instructs CKEditor to accept ALL HTML markup.
                                        // https://ckeditor.com/docs/ckeditor5/latest/features/general-html-support.html#enabling-all-html-features
                                        htmlSupport: {
                                            allow: [
                                                {
                                                    name: /.*/,
                                                    attributes: true,
                                                    classes: true,
                                                    styles: true
                                                }
                                            ]
                                        },
                                        // Be careful with enabling previews
                                        // https://ckeditor.com/docs/ckeditor5/latest/features/html-embed.html#content-previews
                                        htmlEmbed: {
                                            showPreviews: true
                                        },
                                        // https://ckeditor.com/docs/ckeditor5/latest/features/link.html#custom-link-attributes-decorators
                                        link: {
                                            decorators: {
                                                addTargetToExternalLinks: true,
                                                defaultProtocol: 'https://',
                                                toggleDownloadable: {
                                                    mode: 'manual',
                                                    label: 'Downloadable',
                                                    attributes: {
                                                        download: 'file'
                                                    }
                                                }
                                            }
                                        },
                                        // https://ckeditor.com/docs/ckeditor5/latest/features/mentions.html#configuration
                                        mention: {
                                            feeds: [
                                                {
                                                    marker: '@',
                                                    feed: [
                                                        '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
                                                        '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
                                                        '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé',
                                                        '@sugar', '@sweet', '@topping', '@wafer'
                                                    ],
                                                    minimumCharacters: 1
                                                }
                                            ]
                                        },
                                        // The "super-build" contains more premium features that require additional configuration, disable them below.
                                        // Do not turn them on unless you read the documentation and know how to configure them and setup the editor.
                                        removePlugins: [
                                            // These two are commercial, but you can try them out without registering to a trial.
                                            // 'ExportPdf',
                                            // 'ExportWord',
                                            'CKBox',
                                            'CKFinder',
                                            'EasyImage',
                                            // This sample uses the Base64UploadAdapter to handle image uploads as it requires no configuration.
                                            // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/base64-upload-adapter.html
                                            // Storing images as Base64 is usually a very bad idea.
                                            // Replace it on production website with other solutions:
                                            // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/image-upload.html
                                            // 'Base64UploadAdapter',
                                            'RealTimeCollaborativeComments',
                                            'RealTimeCollaborativeTrackChanges',
                                            'RealTimeCollaborativeRevisionHistory',
                                            'PresenceList',
                                            'Comments',
                                            'TrackChanges',
                                            'TrackChangesData',
                                            'RevisionHistory',
                                            'Pagination',
                                            'WProofreader',
                                            // Careful, with the Mathtype plugin CKEditor will not load when loading this sample
                                            // from a local file system (file://) - load this site via HTTP server if you enable MathType.
                                            'MathType',
                                            // The following features are part of the Productivity Pack and require additional license.
                                            'SlashCommand',
                                            'Template',
                                            'DocumentOutline',
                                            'FormatPainter',
                                            'TableOfContents'
                                        ],  
                                    });
                            </script>
                    </div>
                </div>

                <div class="answers">
                    <div class="quiz_name_1">
                        <div class="q_name_1">
                            <span class="quc">A.) Option : 1</span>
                        </div>
                        <div class="text_field">
                            <input type="text" placeholder="Enter Option 1" name="Aanswer{{ $i }}">
                        </div>
                    </div>
                    <div class="quiz_name_1">
                        <div class="q_name_1">
                            <span class="quc">B.) Option : 2</span>
                        </div>
                        <div class="text_field">
                            <input type="text" placeholder="Enter Option 2" name="Banswer{{ $i }}">
                        </div>
                    </div>
                    <div class="quiz_name_1">
                        <div class="q_name_1">
                            <span class="quc">C.) Option : 3</span>
                        </div>
                        <div class="text_field">
                            <input type="text" placeholder="Enter Option 3" name="Canswer{{ $i }}">
                        </div>
                    </div>
                    <div class="quiz_name_1">
                        <div class="q_name_1">
                            <span class="quc">D.) Option : 4</span>
                        </div>
                        <div class="text_field">
                            <input type="text" placeholder="Enter Option 4" name="Danswer{{ $i }}">
                        </div>
                    </div>
                </div>

                <div class="correct_answer">
                    <div class="correct">
                        <span class="quc">Select Correct Option</span>
                    </div>
                    <div class="section">
                        <select name="correct{{ $i }}" id="answers">
                            <option value="">Select Answer</option>
                            <option value="A">Option A</option>
                            <option value="B">Option B</option>
                            <option value="C">Option C</option>
                            <option value="D">Option D</option>
                        </select>
                    </div>
                </div>
                
            </div>

            <div class="line"></div>

        @endfor

       {{--  <input type="text" name="shehan"> --}}

        <div class="buttons">
            <div class="btnss">
                <input type="submit" value="Save and Publish">
                <input type="button" value="Save" id="save">
                <input type="reset" value="Clear">
                <input type="button" value="Cancel">
            </div>
        </div>
    </form>
</div>