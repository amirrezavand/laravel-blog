@extends('admin.layouts.master')

@section('title','Resume')

@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Resume</h3>
                <p class="text-subtitle text-muted">For Create and Edit Resume</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin/">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.resume.index')}}">Resume</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Create and Edit</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- Form start -->
    <section id="input-validation">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Resume</h4>
                    </div>

                    <div class="card-body">
                        <form method="post"
                              action="@if(getRouteAction()=='create') {{route('admin.resume.store')}} @else {{ route('admin.resume.update',['resume'=>$resume->id])}} @endif"
                              enctype="multipart/form-data">
                            @csrf()
                            @if(getRouteAction()=='edit')
                                @method('put')
                            @endif
                            <div class="row">

                                <div class="col-sm-6">
                                    <label for="userId">User</label>
                                    <fieldset class="form-group">
                                        <select class="form-select @error('user_id') is-invalid @enderror"
                                                id="userId" name="user_id">
                                            <option value=""></option>
                                            @foreach($users as $item)
                                                <option value="{{$item->id}}"
                                                        @if($item->id==old('user_id',$resume->user_id)) selected @endif>{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('user_id')
                                            <div class="invalid-feedback">
                                                <i class="bx bx-radio-circle"></i>
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </fieldset>
                                </div>

                                <div>
                                    <label for="description">Description</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" id="description"
                                              placeholder="description" rows="3"
                                              name="description">{{old('description',$resume->description)}}</textarea>
                                    @error('description')
                                    <div class="invalid-feedback">
                                        <i class="bx bx-radio-circle"></i>
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>

                                <div class="mt-2">
                                    <button class="btn btn-success btn-sm" type="submit">@if(getRouteAction()=='create')
                                            save
                                        @else
                                            edit
                                        @endif</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- form end -->
@endsection

@section('script')
    <script src="https://cdn.tiny.cloud/1/gnjqt02uoj1qkjsedw3xtejlbeskzx0z0sv79it6876ta2ua/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        var useDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;

        tinymce.init({
            selector: '#description',
            plugins: 'print preview importcss tinydrive searchreplace autolink autosave save directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
            tinydrive_token_provider: 'URL_TO_YOUR_TOKEN_PROVIDER',
            tinydrive_dropbox_app_key: 'YOUR_DROPBOX_APP_KEY',
            tinydrive_google_drive_key: 'YOUR_GOOGLE_DRIVE_KEY',
            tinydrive_google_drive_client_id: 'YOUR_GOOGLE_DRIVE_CLIENT_ID',
            mobile: {
                plugins: 'print preview importcss tinydrive searchreplace autolink autosave save directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount textpattern noneditable help charmap quickbars emoticons'
            },
            menu: {
                tc: {
                    title: 'Comments',
                    items: 'addcomment showcomments deleteallconversations'
                }
            },
            menubar: 'file edit view insert format tools table tc help',
            toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist checklist | forecolor backcolor casechange formatpainter removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media pageembed template link anchor codesample | a11ycheck ltr rtl | showcomments addcomment',
            autosave_ask_before_unload: true,
            autosave_interval: '30s',
            autosave_prefix: '{path}{query}-{id}-',
            autosave_restore_when_empty: false,
            autosave_retention: '2m',
            image_advtab: true,
            link_list: [
                { title: 'My page 1', value: 'https://www.tiny.cloud' },
                { title: 'My page 2', value: 'http://www.moxiecode.com' }
            ],
            image_list: [
                { title: 'My page 1', value: 'https://www.tiny.cloud' },
                { title: 'My page 2', value: 'http://www.moxiecode.com' }
            ],
            image_class_list: [
                { title: 'None', value: '' },
                { title: 'Some class', value: 'class-name' }
            ],
            importcss_append: true,
            templates: [
                { title: 'New Table', description: 'creates a new table', content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>' },
                { title: 'Starting my story', description: 'A cure for writers block', content: 'Once upon a time...' },
                { title: 'New list with dates', description: 'New List with dates', content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>' }
            ],
            template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
            template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
            height: 600,
            image_caption: true,
            quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
            noneditable_noneditable_class: 'mceNonEditable',
            toolbar_mode: 'sliding',
            spellchecker_ignore_list: ['Ephox', 'Moxiecode'],
            tinycomments_mode: 'embedded',
            content_style: '.mymention{ color: gray; }',
            contextmenu: 'link image imagetools table configurepermanentpen',
            a11y_advanced_options: true,
            skin: useDarkMode ? 'oxide-dark' : 'oxide',
            content_css: useDarkMode ? 'dark' : 'default',
            /*
            The following settings require more configuration than shown here.
            For information on configuring the mentions plugin, see:
            https://www.tiny.cloud/docs/plugins/premium/mentions/.
            */
            mentions_selector: '.mymention',
            // mentions_fetch: mentions_fetch,
            // mentions_menu_hover: mentions_menu_hover,
            // mentions_menu_complete: mentions_menu_complete,
            // mentions_select: mentions_select,
            mentions_item_type: 'profile',
            directionality : 'rtl'
        });

    </script>
@endsection



