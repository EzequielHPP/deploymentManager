<?php
/**
 * Created by PhpStorm.
 * User: ezequielpereira
 * Date: 14/03/2017
 * Time: 17:36
 */
?>
<div id="mainmodal" class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title pull-left">Modal title</h5>
                <button type="button pull-right" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Modal body text goes here.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div id="createWebsite" class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title pull-left">Create a new website</h5>
                <button type="button pull-right" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <fieldset>

                        {{ csrf_field() }}

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="website_name">Website name</label>
                            <div class="col-md-7 alert">
                                <input id="website_name" name="website_name" type="text" placeholder="Name for easy identification" class="form-control input-md" required="">

                            </div>
                        </div>

                        <!-- Prepended text-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="website_url_local">Local URL</label>
                            <div class="col-md-7 alert">
                                <div class="input-group">
                                    <span class="input-group-addon">http://</span>
                                    <input id="website_url_local" name="website_url_local" class="form-control" placeholder="xxxxxxx" type="text" required="">
                                    <span class="input-group-addon">.ehd.office</span>
                                </div>
                                <p class="help-block">URL that you use for office testing</p>
                            </div>
                        </div>

                        <!-- Prepended text-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="website_path_local">Local Path</label>
                            <div class="col-md-7 alert">
                                <div class="input-group">
                                    <span class="input-group-addon">/var/www/html/</span>
                                    <input id="website_path_local" name="website_path_local" class="form-control" placeholder="xxxxxx/" type="text" required="">
                                </div>
                                <p class="help-block">Path in Gorilla</p>
                            </div>
                        </div>

                        <!-- Prepended text-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="website_url_remote">Remote URL</label>
                            <div class="col-md-7 alert">
                                <div class="input-group">
                                    <span class="input-group-addon">http://</span>
                                    <input id="website_url_remote" name="website_url_remote" class="form-control" placeholder="xxxxxxxx" type="text" required="">
                                    <span class="input-group-addon">.website-in-dev.co.uk</span>
                                </div>
                                <p class="help-block">URL in website in dev</p>
                            </div>
                        </div>

                        <!-- Prepended text-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="website_path_remote">Remote Path</label>
                            <div class="col-md-7 alert">
                                <div class="input-group">
                                    <span class="input-group-addon">/home/websiteindevco/public_html/</span>
                                    <input id="website_path_remote" name="website_path_remote" class="form-control" placeholder="xxxxxxx/" type="text" required="">
                                </div>
                                <p class="help-block">Path in Website-in-dev</p>
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="website_git">Git SSH</label>
                            <div class="col-md-7 alert">
                                <input id="website_git" name="website_git" type="text" placeholder="git@10.0.0.12:laravel/xxxxxx.git" class="form-control input-md" required="">
                                <span class="help-block">Git url for the repository from GitLab</span>
                            </div>
                        </div>

                    </fieldset>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary js-create-website-save">Create entry</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
