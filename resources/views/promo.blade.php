@extends('frontend.layouts.main')

@section('title', 'Promo')
@section('css')
 <style>
           
           .plan-card {
            border: 1px solid #333;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 10px;
        }
        
        .plan-title {
            font-size: 2rem;
            font-weight: bold;
            display: flex;
            align-items: center;
        }
        
        .arrow-up {
            margin-left: 10px;
            font-size: 1.5rem;
        }
        
        .day-label {
            color: #e83e8c;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
        }
        
        .night-label {
            color: #9370DB;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
        }
        
        .info-circle {
            display: inline-block;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            border: 1px solid #e83e8c;
            text-align: center;
            line-height: 14px;
            font-size: 10px;
            margin-left: 5px;
            color: #e83e8c;
        }
        
        .night-info-circle {
            border: 1px solid #9370DB;
            color: #9370DB;
        }
        
        .timeframe-label {
            color: #888;
            font-size: 0.8rem;
            margin-bottom: 5px;
        }
        
        .select-dropdown {
            background-color: transparent;
            border: 1px solid #e83e8c;
            color: #e83e8c;
            border-radius: 4px;
            padding: 5px 10px;
            width: 100%;
        }
        
        .night-select {
            border: 1px solid #9370DB;
            color: #9370DB;
        }
        
        .credits-info {
            margin-top: 10px;
            font-size: 0.9rem;
        }
        
        .post-btn {
            background-color: #00c9a7;
            color: white;
            border: none;
            border-radius: 4px;
            padding: 10px;
            width: 100%;
            margin-top: 10px;
        }
        
        .promo-section {
            text-align: center;
            margin-bottom: 20px;
        }
 </style>
@endsection
@section('content')
<div class="container py-3">
    <div class="row">
        <div class="col-md-8 card py-4 mx-auto">
            <div class="promo-section mb-4">
                <h5 class="text-center mb-3">Choose a promo</h5>
                <button class="post-btn">Post for free</button>
            </div>
            
            <!-- 3x3 Plan -->
            <div class="plan-card">
                <div class="row">
                    <div class="col-6">
                        <div class="plan-title">
                            3x3 <span class="arrow-up">↑</span>
                        </div>
                        <div class="day-label">
                            day <span class="info-circle">i</span>
                        </div>
                        <div class="description">3 top-ups a day for 3 days</div>
                    </div>
                    <div class="col-6">
                        <div class="timeframe-label">Timeframe</div>
                        <select class="select-dropdown">
                            <option>Select</option>
                        </select>
                    </div>
                </div>
                <div class="credits-info">5 Credits - 188.00 Rs</div>
            </div>
            
            <!-- 3x7 Plan -->
            <div class="plan-card">
                <div class="row">
                    <div class="col-6">
                        <div class="plan-title">
                            3x7 <span class="arrow-up">↑</span>
                        </div>
                        <div class="day-label">
                            day <span class="info-circle">i</span>
                        </div>
                        <div class="description">3 top-ups a day for 7 days</div>
                    </div>
                    <div class="col-6">
                        <div class="timeframe-label">Timeframe</div>
                        <select class="select-dropdown">
                            <option>Select</option>
                        </select>
                    </div>
                </div>
                <div class="credits-info">10 Credits - 376.00 Rs</div>
            </div>
            
            <!-- 5x1 Plan -->
            <div class="plan-card">
                <div class="row">
                    <div class="col-6">
                        <div class="plan-title">
                            5x1 <span class="arrow-up">↑</span>
                        </div>
                        <div class="day-label">
                            day <span class="info-circle">i</span>
                        </div>
                        <div class="description">5 top-ups a day for 1 day</div>
                    </div>
                    <div class="col-6">
                        <div class="timeframe-label">Timeframe</div>
                        <select class="select-dropdown">
                            <option>Select</option>
                        </select>
                    </div>
                </div>
                <div class="credits-info">3 Credits</div>
            </div>
            
            <!-- 5x3 Plan -->
            <div class="plan-card">
                <div class="row">
                    <div class="col-6">
                        <div class="plan-title">
                            5x3 <span class="arrow-up">↑</span>
                        </div>
                        <div class="day-label">
                            day <span class="info-circle">i</span>
                        </div>
                        <div class="description">5 top-ups a day for 3 days</div>
                    </div>
                    <div class="col-6">
                        <div class="timeframe-label">Timeframe</div>
                        <select class="select-dropdown">
                            <option>Select</option>
                        </select>
                    </div>
                </div>
                <div class="credits-info">8 Credits - 300.00 Rs</div>
            </div>
            
            <!-- 5x7 Plan -->
            <div class="plan-card">
                <div class="row">
                    <div class="col-6">
                        <div class="plan-title">
                            5x7 <span class="arrow-up">↑</span>
                        </div>
                        <div class="day-label">
                            day <span class="info-circle">i</span>
                        </div>
                        <div class="description">5 top-ups a day for 7 days</div>
                    </div>
                    <div class="col-6">
                        <div class="timeframe-label">Timeframe</div>
                        <select class="select-dropdown">
                            <option>Select</option>
                        </select>
                    </div>
                </div>
                <div class="credits-info">16 Credits - 602.00 Rs</div>
            </div>
            
            <!-- 10x1 Plan -->
            <div class="plan-card">
                <div class="row">
                    <div class="col-6">
                        <div class="plan-title">
                            10x1 <span class="arrow-up">↑</span>
                        </div>
                        <div class="night-label">
                            night <span class="info-circle night-info-circle">i</span>
                        </div>
                        <div class="description">10 top-ups a day for 1 day</div>
                    </div>
                    <div class="col-6">
                        <div class="timeframe-label">Timeframe</div>
                        <select class="select-dropdown night-select">
                            <option>00:00 - 09:00</option>
                        </select>
                    </div>
                </div>
                <div class="credits-info">4 Credits</div>
            </div>
            
            <!-- 10x7 Plan -->
            <div class="plan-card">
                <div class="row">
                    <div class="col-6">
                        <div class="plan-title">
                            10x7 <span class="arrow-up">↑</span>
                        </div>
                        <div class="night-label">
                            night <span class="info-circle night-info-circle">i</span>
                        </div>
                        <div class="description">10 top-ups a day for 7 days</div>
                    </div>
                    <div class="col-6">
                        <div class="timeframe-label">Timeframe</div>
                        <select class="select-dropdown night-select">
                            <option>00:00 - 09:00</option>
                        </select>
                    </div>
                </div>
                <div class="credits-info">20 Credits - 752.00 Rs</div>
            </div>
        </div>
    </div>
</div>
@endsection