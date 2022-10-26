@extends('layouts.web')
@section('title', $title)

@section('content')

<div class="container">
  <div class="main-body-section px-5">
    <div class="row">
      <div class="single-post-section py-3">
        <div class="card shadow">
            <div class="card-header text-center h4">
                Lorem ipsum dolor sit amet.
            </div>
            <div class="card-body" style="min-height: 400px;">
                <div class="post-image mb-3">
                    <img src="{{ asset('images/slider-1.jpg') }}" alt="" height="400px" width="auto" class="d-block mx-auto">
                    <div class="image-caption text-center"><strong>Caption:</strong> Lorem ipsum dolor sit amet.</div>
                </div>
                <div class="post-body px-4" style="text-align: justify;">
                    <div class="post-title h4 mb-2">
                        Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.
                    </div>

                    <div class="post-body-section">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum id quisquam doloremque iure, dolore temporibus labore voluptas qui eius nulla sed tenetur at itaque! Modi, minima provident. Debitis eum dolor fugiat, rerum qui dolorem provident omnis consequuntur pariatur quae repudiandae hic! Fuga, voluptate officia quidem eaque fugiat sapiente eius odio. Atque natus quae, officia ut voluptatibus, accusamus minima cum iste repellat neque perferendis nulla doloribus quibusdam quam repellendus odio assumenda? Deserunt harum itaque praesentium quam veniam cumque beatae non voluptatem eligendi, eos nobis perferendis. Sequi numquam eius maxime, nisi deserunt praesentium corrupti eligendi maiores ducimus labore quia in nulla sit soluta iure a harum exercitationem sed vitae tempora quam? Asperiores nesciunt iste voluptate quibusdam minus, atque unde eius accusantium architecto illum recusandae, nam placeat, est vitae cumque quas explicabo fugit sapiente esse. Natus, non. Doloribus, rerum impedit. Delectus, ad eum! Quisquam fuga ut numquam aspernatur repellat deleniti, accusamus odio laudantium sint id officiis cupiditate ipsam optio soluta eius vitae nostrum, provident est ea dolorem. Voluptatem hic doloremque ad perferendis consequuntur similique. Sapiente, quaerat iusto perspiciatis placeat ullam deleniti hic laborum, recusandae itaque dignissimos, voluptatum molestias? Cum quos neque omnis vitae accusantium sed beatae labore unde nam esse, nisi tempore distinctio.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas mollitia obcaecati ad magni! Rem quia, corporis, non aliquid voluptatibus voluptate quis a libero placeat corrupti impedit repellat amet. Consequuntur distinctio perferendis quae eligendi porro odit, cum, quis aspernatur repellat necessitatibus nostrum fuga itaque esse quasi ex quaerat molestiae asperiores laborum.

                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint fugiat quaerat a pariatur expedita voluptatem laboriosam dignissimos maxime ea possimus saepe odit et voluptas, iste nesciunt dolorem labore atque, accusantium perferendis soluta optio. Numquam inventore voluptatem ad optio unde, alias repellat temporibus? Voluptas iusto, accusantium quis, sint ipsum, voluptatibus pariatur perspiciatis obcaecati magnam dolor sequi eum quasi. Labore dolore sapiente consequuntur cum officia vel non reiciendis sint eum possimus aspernatur dignissimos nam laboriosam odit numquam officiis deleniti omnis adipisci ea facilis autem neque, ipsa quisquam quos? Eum iste, amet, dolorem quas beatae animi blanditiis distinctio modi quia, quidem delectus quos!
                    </div>

                    <div class="google-map text-center my-3" style="max-height: 600px;">
                        <div class="card">
                            <div class="card-header text-center">
                                Google Map
                            </div>
                            <div class="card-body">
                                <div class="location-map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1825.5566840497231!2d90.3716359!3d23.778976999999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c1281e23768b%3A0xcce93df35e92760a!2sNational%20Museum%20of%20Science%20and%20Technology!5e0!3m2!1sen!2sbd!4v1666795718844!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="post-author mt-4">
                        <strong>Category: </strong> Historical Place <br>
                        <strong>Post by: </strong> Angel Sadia <br>
                        <strong>Post date: </strong> 10 Oct 2022 
                    </div>

                    <div class="comment-section mt-4">
                        <div class="title h4">
                            Comments
                        </div>
                        
                        <div class="comments mb-4">
                            <div class="row">
                                <div class="col-md-1">
                                    <img src="{{ asset('images/user.jpg') }}" alt="user" class="border rounded-circle" height="50px" width="50px">
                                </div>
                                <div class="col-md-4" style="margin-left: -35px;">
                                    <div class="message rounded p-1 border">
                                        <strong>Sadia Jahan Prova</strong>
                                        <div class="mt-1">Lorem ipsum dolor sit amet.</div>
                                        <small>Date: 10 Oct 2022</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="comments mb-4">
                            <div class="row">
                                <div class="col-md-1">
                                    <img src="{{ asset('images/user.jpg') }}" alt="user" class="border rounded-circle" height="50px" width="50px">
                                </div>
                                <div class="col-md-4" style="margin-left: -35px;">
                                    <div class="message rounded p-1 border">
                                        <strong>Sadia Jahan Prova</strong>
                                        <div class="mt-1">Lorem ipsum dolor sit amet.</div>
                                        <small>Date: 10 Oct 2022</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="user-comments border rounded mb-2 p-4" style="height: 200px; margin-right: 400px;">
                            <form action="">                                  
                                  <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Name" aria-label="Name">
                                    <span class="input-group-text">@</span>
                                    <input type="text" class="form-control" placeholder="Email" aria-label="Email">
                                  </div>
                                  
                                  <div class="input-group mb-3">
                                    <span class="input-group-text">Comment</span>
                                    <textarea class="form-control" aria-label="With textarea"></textarea>
                                  </div>

                                  <div class="input-group mb-3">
                                    <button class="btn btn-sm btn-primary">Submit</button>
                                  </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection