<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StaticPage;

class StaticPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staticpages = StaticPage::select('static_pages.id','static_pages.title','static_pages.title_ar','static_pages.p_content','static_pages.p_content_ar','static_pages.status')->orderBy('id','DESC')->get();
        return view('staticpages.index')->with('staticpages',$staticpages);
 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $staticpage['staticpages']= StaticPage::all();
        return view('staticpages.create',$staticpage);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['title'=>'required|unique:static_pages']);
        $staticpage = new StaticPage();
        $staticpage->title = $request->input('title');
        $staticpage->p_content = $request->input('p_content');  
        $staticpage->title_ar = $request->input('title_ar');
        $staticpage->p_content_ar = $request->input('p_content_ar'); 
        $staticpage->status = $request->input('status');
      
        $staticpage->save();
      
        return redirect('/admin/staticpages/index')->with('completed', 'content has been updated');  

        //    return view('staticpages.create');
        //    return view('staticpages.create',['staticpage'=>$staticpage])->redirect('/staticpages/index')->with('completed', 'content has been updated');  

          }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StaticPage  $staticpage
     * @return \Illuminate\Http\Response
     */
    public function show($staticpage_id)
    {
        $staticpage= StaticPage::findOrFail($staticpage_id);
        return view('staticpages.show', compact('staticpage'));    

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StaticPage  $staticpage
     * @return \Illuminate\Http\Response
     */
    public function edit($staticpage_id)
    {
        $staticpage= StaticPage::findOrFail($staticpage_id);

         return view('staticpages.edit', compact('staticpage'));    
        }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StaticPage  $staticpage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $staticpage_id)
    {
        $request->validate([
            'title' => 'required',
            'p_content' => 'required',
            'title_ar' => 'required',
            'p_content_ar' => 'required',
         ]);

       $staticpage= StaticPage::whereId($staticpage_id)->update([
        'title'=>$request->input('title'),
        'p_content'=>$request->input('p_content'),
        'title_ar'=>$request->input('title_ar'),
        'p_content_ar'=>$request->input('p_content_ar'),
        'status'=>$request->input('status')
        ]);
        return redirect('/admin/staticpages/index')->with('completed', 'staticpage has been updated');   
     
         }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StaticPage $staticpage
     * @return \Illuminate\Http\Response
     */
    public function destroy($staticpage)
    {
        $staticpage= StaticPage::find($staticpage);


         $staticpage->delete();
         return redirect('/admin/staticpages/index')->with('success','staticpage deleted successfully');    
        }


    ##################################################

    
    public function display_row($category_id)
    {
        $affected1 =[];
        $data['dept'] = StaticPage::where('id',$staticpage_id)->get();
        return view('update',$data);
                    }
                    
                    public function is_active($staticpage_id){
                        $affected1= StaticPage::where('id',$staticpage_id)
                        ->update(['status'=>'1']);
                        // $affected = Category::where('is_delete',0)->paginate(25);
                        $staticpages = StaticPage::select('static_pages.id','static_pages.title','static_pages.title_ar','static_pages.p_content','static_pages.p_content_ar','static_pages.status')->orderBy('id','DESC')->get();
                        return view('staticpages.index')->with('staticpages',$staticpages);
    
                        }
                        public function is_not_active($staticpage_id){
                            $affected1= StaticPage::where('id',$staticpage_id)
                            ->update(['status'=>'0']);
                            $staticpages = StaticPage::select('static_pages.id','static_pages.title','static_pages.title_ar','static_pages.p_content','static_pages.p_content_ar','static_pages.status')->orderBy('id','DESC')->get();
                            return view('staticpages.index')->with('staticpages',$staticpages);
    
                            }
    
    public function display_with_status($id)
        {
            if($id==1){
                $affected1 =[];
                $affected = StaticPage::where(['status',1])->paginate(25);
                return view('department',['cat'=>$affected,'data1'=>$affected1]);
            }elseif($id==0){
                $affected1 =[];
                $affected = StaticPage::where(['status',0])->paginate(25);
                return view('department',['cat'=>$affected,'data1'=>$affected1]);
            }
    
        }

}
