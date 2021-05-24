<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <h3>All Details</h3>
    </div>
    <div>
        <div class="row">
            <div class="col-4">
                <label>Name</label> : {{$response->name}}
            </div>
            <div class="col-5">
                <label>Email</label> : {{$response->email}}
            </div>
            <div class="col-3">
                <label>District</label> : {{$response->district}}
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <label>Organization Name</label> : {{$response->organization_name}}

            </div>
            <div class="col-6">
                <label>Organization Address</label> : {{$response->organization_address}}

            </div>
            <!-- <div class="col-4">
                                <label>Organization Certificate</label> : {{$response->org_ic_pdf}}

                            </div> -->
        </div>
        <div class="row">
            <div class="col-4">
                <label>Address</label> : {{$response->address}}

            </div>
            <div class="col-4">
                <label>Mobile</label> : {{$response->mobile}}

            </div>
            <div class="col-4">
                <label>gender</label> : {{$response->gender}}

            </div>

        </div>
        <div class="row">
            <!-- <div class="col-4">
                                <label>mip_pdf</label> : {{$response->mip_pdf}}

                            </div> -->

            <div class="col-4">
                <label>WhatsApp Number</label> : {{$response->wp_number}}

            </div>
            <div class="col-4">
                <label>md_org</label> : {{$response->md_org}}

            </div>
        </div>


</body>

</html>