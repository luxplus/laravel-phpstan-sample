<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request): string
    {
        $meetingTitle = $this->getMeetingTitle($request->id);

        return $meetingTitle;
    }

    private function getMeetingTitle(int $id): string
    {
        $meetings = $this->getMeetingTitles();

        return $meetings[$id];
    }

    /**
     * @return array<int, string>
     */
    private function getMeetingTitles(): array
    {
        return ['Stand up'];
    }
}
