<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\MStudent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentApi extends Controller
{
    /**
     * 全件取得
     *
     * @return void
     */
    public function index() {
        $students = MStudent::all();

        return response()->json([
            "students" => $students,
            "message" => "全件検索正常終了"
        ], 200);
    }

    /**
     * 1件取得
     *
     * @return void
     */
    public function show($id) {
        $student = MStudent::find($id);

        $msg = "1件検索正常終了";
        $code = 200;
        if(is_null($student)) {
            $msg = "該当データが見つかりませんでした。";
            $code = 404;
        }

        return response()->json([
            "students" => $student,
            "message" => $msg
        ], $code);
    }

    /**
     * 新規登録
     *
     * @param Request $request
     * @return void
     */
    public function create(Request $request) {
        try {
            DB::beginTransaction();

            $model = new MStudent();
            $model->fill($request->all());
            $model->save();

            DB::commit();
        }catch(\Throwable $th) {
            DB::rollback();
            throw $th;
        }

        return response()->json([
            "students" => $model,
            "message" => "1件の登録完了しました"
        ], 201);
    }

    /**
     * 更新
     *
     * @param Request $request
     * @return void
     */
    public function update(Request $request, $id) {
        $student = MStudent::find($id);
        if(is_null($student)) {
            return response()->json([
                "message" => "更新対象データが存在しません"
            ], 404);
        }

        try {
            DB::beginTransaction();

            $student->fill($request->all());
            $student->save();

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }

        return response()->json([
            "students" => $student,
            "message" => "1件の更新完了しました"
        ], 200);
    }

    /**
     * 1件削除
     *
     * @return void
     */
    public function delete($id) {
        $student = MStudent::find($id);
        if(is_null($student)) {
            return response()->json([
                "message" => "削除対象データが存在しません"
            ], 404);
        }

        try {
            DB::beginTransaction();

            $student->delete();

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }

        return response()->json([
            "students" => $student,
            "message" => "1件の削除完了しました"
        ], 202);
    }
}