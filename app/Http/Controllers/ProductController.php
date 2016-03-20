<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    use App\Http\Requests;
    use Illuminate\Support\Facades\File;
    use Illuminate\Support\Facades\Input;


    class ProductController extends Controller
    {
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            $productPath = database_path() . "/jsondata/product.json";
            $productJson = File::get($productPath);
            $productTnpJson['data'] = json_decode($productJson);
            return response()->json($productTnpJson);
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            //
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            $productPath = database_path() . "/jsondata/product.json";
            $productJson = File::get($productPath);
            $request->merge(['date'=>date('Y-m-d H:i:s')]);
            $productPost[] = $request->only('name', 'price', 'quantity','date');


            $productArr = json_decode($productJson);
            if(!is_array($productArr)) $productArr = [];


            $productMrgArr = array_merge($productArr, $productPost);
            $productJson = json_encode($productMrgArr);
            File::put($productPath, $productJson);

            return response()->json($productMrgArr);
        }

        /**
         * Display the specified resource.
         *
         * @param  int $id
         * @return \Illuminate\Http\Response
         */
        public function show($id)
        {
            //
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param  int $id
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
            //
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request $request
         * @param  int $id
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, $id)
        {
            //
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  int $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            //
        }
    }
