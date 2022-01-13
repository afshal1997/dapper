<?php include 'CommonFile/Header.php'; ?>

<main>
    <section class="contactUsMainBanner" id="contactUsMainBanner">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 mt-5" data-aos="fade-up">
                    <h4>Contact Us</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php" class="text-warning">Home</a></li>
                            <li class="breadcrumb-item active"><b>Contact Us</b></li>
                        </ol>
                    </nav>
                    <div class="builtMarketing">
                        <h2>Lorem Ipsum is simply dummy text of the <span>printing.</span></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="aboutUsGoDownBtn">
            <div class="row">
                <div class="col-lg-4 m-auto">
                </div>
                <div class="col-lg-8 m-auto">
                    <div class="card p-4">
                        <div class="row">
                            <div class="col-lg-6 m-auto">
                                <h4><b>Contact information</b></h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                            <div class="col-lg-6 m-auto">
                                <div class="contactInformation">
                                    <ul>
                                        <li class="position-relative">
                                            <b>Address :</b> <a href="javascript:void(0)">Lorem Ipsum is simply dummy text</a>
                                        </li>
                                        <li class="position-relative">
                                            <b>Email :</b> <a href="mailto:BrandedByDapper@gmail.com">BrandedByDapper@gmail.com</a>
                                        </li>
                                        <li class="position-relative mb-0">
                                            <b>Phone :</b> <a href="tel:+1234 5678910">+1234 5678910</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contactUsForm">
        <div class="container">
            <div class="col-lg-6 m-auto">
                <div class="card formBg">
                    <div class="card-body">
                        <form action="" class="form p-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3 w-100">
                                        <label for="first-name" class="form-label text-muted"><b>First Name</b> <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="first-name" placeholder="First Name" id="first-name" aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label text-muted"><b>Email</b> <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control w-100" name="email" placeholder="Email" id="email" aria-describedby="emailHelp">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="last-name" class="form-label text-muted"><b>Last Name</b> <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="last-name" placeholder="Last Name" id="last-name" aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="phone" class="form-label text-muted"><b>Phone</b></label>
                                        <input type="number" class="form-control" name="phone" placeholder="+(000) 00000" id="phone" aria-describedby="emailHelp">
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label text-muted" for="inlineCheckbox1">Best point of contact? <span class="text-danger">*</span></label>
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label text-muted" for="inlineCheckbox2">Email</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label text-muted" for="inlineCheckbox3">Phone</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4">
                                        <label class="form-check-label text-muted" for="inlineCheckbox4">Either works for me</label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-warning text-light">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include 'CommonFile/Footer.php'; ?>