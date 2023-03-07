<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    @vite('./resources/css/app.css')
</head>
<body>
    <div class="Logo bg-blue-300 h-20 text-center">
        logo
    </div>
    <div class="nav flex flex-row h-20 my-2 text-center">
        <div class="nav basis-8/12 mr-2 bg-red-400">
            <ul class="grid grid-cols-4 gap-2 text-black">
                <li class="border py-2 rounded-3xl bg-yellow-200">Trang chu</li>
                <li class="border py-2 rounded-3xl bg-yellow-200">San Pham</li>
                <li class="border py-2 rounded-3xl bg-yellow-200">Ky Thuat nuoi</li>
                <li class="border py-2 rounded-3xl bg-yellow-200">Tin tuc</li>
            </ul>
        </div>
        <div class="search basis-4/12 bg-lime-400">
            Search
        </div>
    </div>
    <div class="content mx-20 h-auto text-center">
        <div class="flex flex-row h-36">
            <div class="sidebar basis-4/12 bg-violet-500">
                Sidebar
            </div>
            <div class="banner ml-2 basis-8/12 bg-green-400">
                Banner
            </div>
        </div>
        <div class="product h-36 my-2 bg-orange-400">
                Product
        </div>
        <div class="news h-36 bg-blue-600">
            News
        </div>
    </div>
    <div class="footer auto bg-yellow-300 text-center">
        <div class="content-footer mx-20 mt-2 bg-red-600 h-36 ">
            Content-Footer
        </div>
    </div>

</body>
</html>