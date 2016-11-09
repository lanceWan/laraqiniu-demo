<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use zgldh\QiniuStorage\QiniuStorage;
class UploadController extends Controller
{
	/**
	 * 上传文件到七牛
	 * @author 晚黎
	 * @date   2016-11-09T16:58:37+0800
	 * @param  Request                  $request [description]
	 * @return [type]                            [description]
	 */
    public function uploadFile(Request $request)
    {
    	// 判断是否有文件上传
    	if ($request->hasFile('file')) {
    		// 获取文件,file对应的是前端表单上传input的name
    		$file = $request->file('file');
    		// Laravel5.3中多了一个写法
    		// $file = $request->file;

    		// 初始化
    		$disk = QiniuStorage::disk('qiniu');
    		// 重命名文件
    		$fileName = md5($file->getClientOriginalName().time().rand()).'.'.$file->getClientOriginalExtension();

    		// 上传到七牛
			$bool = $disk->put('iwanli/image_'.$fileName,file_get_contents($file->getRealPath()));
			// 判断是否上传成功
		    if ($bool) {
				$path = $disk->downloadUrl('iwanli/image_'.$fileName);
				return '上传成功，图片url:'.$path;
			}
			return '上传失败';
		}
		return '没有文件';
    }
}