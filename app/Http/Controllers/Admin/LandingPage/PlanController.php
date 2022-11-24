<?php

namespace App\Http\Controllers\Admin\LandingPage;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use App\Models\PlanDetail;
use App\Models\PlanFeature;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    /**
     * newPlan
     *
     * @param  mixed $request
     * @return void
     */
    public function newPlan(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'price' => 'required|min:0|max:999999999999',
            'features' => 'required'
        ]);

        $data = $request->all();

        $plan = Plan::create([
            'title' => $data['title'],
            'price' => $data['price'],
            'status' => 0,
        ]);

        $plan->save();

        foreach ($data['features'] as $features) {
            PlanDetail::create([
                'planID' => $plan['id'],
                'featureID' => $features,
            ]);
        }

        return redirect()->back()->with('success', 'Plan baru berhasil ditambahkan!');
    }

    /**
     * newFeature
     *
     * @param  mixed $request
     * @return void
     */
    public function newFeature(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        PlanFeature::create([
            'name' => $request->name
        ]);

        return redirect()->back()->with('success', 'Ada fitur plan baru yang sukses ditambahkan!');
    }

    /**
     * editPlan
     *
     * @param  mixed $request
     * @return void
     */
    public function editPlan(Request $request)
    {
        $request->validate([
            'planID' => 'required',
        ]);

        $data = $request->all();

        $plan = Plan::find($data['planID']);
        if ($data['title']) {
            $plan->title = $data['title'];
        }
        if ($data['price']) {
            $plan->price = $data['price'];
        }
        $plan->save();

        if ($data['features']) {
            $planDetail = PlanDetail::where('planID', $data['planID'])->delete();
            foreach ($data['features'] as $features) {
                PlanDetail::create([
                    'planID' => $plan['id'],
                    'featureID' => $features,
                ]);
            }
        }

        return redirect()->back()->with('success', 'Plan berhasil diubah!');
    }

    /**
     * deletePlan
     *
     * @param  mixed $id
     * @return void
     */
    public function deletePlan($id)
    {
        Plan::find($id)->delete();
        PlanDetail::where('planID', $id)->delete();

        return redirect()->back()->with('fail', 'Plan ada yang dihapus!');
    }

    /**
     * actionPlan
     *
     * @param  mixed $id
     * @return void
     */
    public function actionPlan($id)
    {
        $plan = Plan::find($id);
        $active = Plan::where('status', 1)->count();
        if ($plan->status == 0 && $active < 3) {
            $plan->status = 1;
            $plan->save();
        } elseif ($plan->status == 1) {
            $plan->status = 0;
            $plan->save();
        } else {
            return redirect()->back()->with('fail', 'Deactivate 1 Plan yang ada di dalam Active Plan!');
        }

        return redirect()->back()->with('success', 'Terdapat Plan yang telah Aktif!');
    }
}
