@include('admin.inc.header')
<div class="col-md-8 grid-margin stretch-card">
    <div class="card">
       
        <form action="{{url('update-homepage/1')}}" method="post"  enctype="multipart/form-data"  class="dropzone" id="ProductaddNew" >
            
            @csrf
            <div class="card-body">
                <h4 class="card-title">Update Homepage</h4>
                <div class="form-group row">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Homeapge Section One Heading</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control inputsproduct" name="homepage_section_one_heading_one"  onkeypress="checkFilled()" id="exampleInputEmail2" placeholder="HomePage Section One Heading" required />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Homepage Section One Text</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control inputsproduct" name="homepage_section_one_text_one"  onkeypress="checkFilled()" id="exampleInputEmail2" placeholder="Homepage Section One Text" required />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">homepage_section_one_text_one_link</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control inputsproduct" name="homepage_section_one_text_one_link"  onkeypress="checkFilled()" id="exampleInputEmail2" placeholder="Homepage Section One Text" required />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">homepage_section_one_text_one_link_text</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control inputsproduct" name="homepage_section_one_text_one_link_text"  onkeypress="checkFilled()" id="exampleInputEmail2" placeholder="Homepage Section One Text" required />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">homepage_section_one_image_one</label>
                    <div class="col-sm-9">
                        <div class="fileupload" id="drag-and-drop">
                            <p>Drag and drop a file here or click to select</p>
                            <input type="file" name="homepage_section_one_image_one" id="fileInput" required/>
                        </div> 
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">homepage_section_one_image_one_link</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control inputsproduct" name="homepage_section_one_image_one_link"  onkeypress="checkFilled()" id="exampleInputEmail2" placeholder="Homepage Section One Text" required />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">homepage_section_one_image_two</label>
                    <div class="col-sm-9">
                        <div class="fileupload" id="drag-and-drop">
                            <p>Drag and drop a file here or click to select</p>
                            <input type="file" name="homepage_section_one_image_two" id="fileInput" required/>
                        </div> 
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">homepage_section_one_image_two_link</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control inputsproduct" name="homepage_section_one_image_two_link"  onkeypress="checkFilled()" id="exampleInputEmail2" placeholder="Homepage Section One Text" required />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">homepage_section_one_image_three</label>
                    <div class="col-sm-9">
                        <div class="fileupload" id="drag-and-drop">
                            <p>Drag and drop a file here or click to select</p>
                            <input type="file" name="homepage_section_one_image_three" id="fileInput" required/>
                        </div> 
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">homepage_section_one_image_three_link</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control inputsproduct" name="homepage_section_one_image_three_link"  onkeypress="checkFilled()" id="exampleInputEmail2" placeholder="Homepage Section One Text" required />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">homepage_section_one_image_text</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control inputsproduct" name="homepage_section_one_image_text"  onkeypress="checkFilled()" id="exampleInputEmail2" placeholder="Homepage Section One Text" required />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">homepage_section_one_image_text_span</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control inputsproduct" name="homepage_section_one_image_text_span"  onkeypress="checkFilled()" id="exampleInputEmail2" placeholder="Homepage Section One Text" required />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">homepage_section_two_banner_image</label>
                    <div class="col-sm-9">
                        <div class="fileupload" id="drag-and-drop">
                            <p>Drag and drop a file here or click to select</p>
                            <input type="file" name="homepage_section_two_banner_image" id="fileInput" required/>
                        </div> 
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">homepage_section_two_heading_one</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control inputsproduct" name="homepage_section_two_heading_one"  onkeypress="checkFilled()" id="exampleInputEmail2" placeholder="Homepage Section One Text" required />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">homepage_section_two_text</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control inputsproduct" name="homepage_section_two_text"  onkeypress="checkFilled()" id="exampleInputEmail2" placeholder="Homepage Section One Text" required />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">homepage_section_three_banner_image</label>
                    <div class="col-sm-9">
                        <div class="fileupload" id="drag-and-drop">
                            <p>Drag and drop a file here or click to select</p>
                            <input type="file" name="homepage_section_three_banner_image" id="fileInput" required/>
                        </div> 
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">homepage_section_three_image_one</label>
                    <div class="col-sm-9">
                        <div class="fileupload" id="drag-and-drop">
                            <p>Drag and drop a file here or click to select</p>
                            <input type="file" name="homepage_section_three_image_one" id="fileInput" required/>
                        </div> 
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">homepage_section_three_image_one_link</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control inputsproduct" name="homepage_section_three_image_one_link"  onkeypress="checkFilled()" id="exampleInputEmail2" placeholder="Homepage Section One Text" required />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">homepage_section_three_image_two</label>
                    <div class="col-sm-9">
                        <div class="fileupload" id="drag-and-drop">
                            <p>Drag and drop a file here or click to select</p>
                            <input type="file" name="homepage_section_three_image_two" id="fileInput" required/>
                        </div> 
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">homepage_section_three_image_two_link</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control inputsproduct" name="homepage_section_three_image_two_link"  onkeypress="checkFilled()" id="exampleInputEmail2" placeholder="Homepage Section One Text" required />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">homepage_section_three_image_three</label>
                    <div class="col-sm-9">
                        <div class="fileupload" id="drag-and-drop">
                            <p>Drag and drop a file here or click to select</p>
                            <input type="file" name="homepage_section_three_image_three" id="fileInput" required/>
                        </div> 
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">homepage_section_three_image_three_link</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control inputsproduct" name="homepage_section_three_image_three_link"  onkeypress="checkFilled()" id="exampleInputEmail2" placeholder="Homepage Section One Text" required />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">homepage_section_three_image_four</label>
                    <div class="col-sm-9">
                        <div class="fileupload" id="drag-and-drop">
                            <p>Drag and drop a file here or click to select</p>
                            <input type="file" name="homepage_section_three_image_four" id="fileInput" required/>
                        </div> 
                    </div>
                </div>
                <div class="form-group row">
                     <button type="submit" id="submit-all" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light" type="submit">Cancel</button>
                </div>
               
            </div>
        </form>

    </div>
</div>
@include('admin.inc.footer')