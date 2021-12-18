<section class="pb-120 product_details_page pt-30">
    <div class=container>
        <div class=row>
            <div class=col>
                <div class="mt-50 product_details">
                    <div class=row>
                        <div class=col>
                            <div class="text_p mt-2">
                                <h5>Is there something wrong with this ad?</h5>
                                <p>We're constantly working hard to assure that our ads meet high standards and we are very grateful for any kind of feedback from our users.</p>
                            </div>
                            <form action="#" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Reason</label>
                                    <input type="text" name="reson" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Reason">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Description</label>
                                    <textarea type="text" name="description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Desctioption"></textarea>
                                </div>
                                <button type="submit" class="btn btn-danger mt-2">Submit</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
