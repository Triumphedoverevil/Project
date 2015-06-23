<div class="container-fluid">

{{ Form::model(['url'=>'/forex','class'=>'form-horizontal' ]) }}

        <div class="row form-group">

                {{ Form::label('title', 'Title:', ['class'=>'control-label']) }}

                {{ Form::text('title',null, ['class'=>'form-control']) }}

        </div>


        <div class="row form-group">
                {{Form::label('type', 'Type:', ['class'=>'control-label'])}}
                {{ Form::select('type',['Buy','Sell'] , ['class'=>'form-control']) }}                
                {{ Form::select('type',['Open','Close','Modify'] , ['class'=>'form-control']) }}

        </div>

        <div class="row form-group">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#indicators">
                <button type="button" class="btn btn-info btn-xs">Indicators</button></a>
                <div id="indicators" class="panel-collapse collapse">
                <div class="panel-body">
                {{Form::label('RSI', 'Moving Averages:', ['class'=>'label label-default']) }}
                {{ Form::checkbox('name','value') }}      
                {{Form::label('RSI', 'MA(25)', ['class'=>'control-label']) }}
                {{ Form::checkbox('name','value',false) }}      
                {{Form::label('RSI', 'MA(50)', ['class'=>'control-label']) }}                
                {{ Form::checkbox('name','value',false) }}      
                {{Form::label('RSI', 'MA(100)', ['class'=>'control-label']) }}
                <br>
                {{Form::label('RSI', 'Trend Indicators:', ['class'=>'label label-default']) }}
                {{ Form::checkbox('name','value') }}      
                {{Form::label('RSI', 'Bollinger Bands', ['class'=>'control-label']) }}
                {{ Form::checkbox('name','value') }}      
                {{Form::label('RSI', 'Parabolic SAR', ['class'=>'control-label']) }}
                {{ Form::checkbox('name','value') }}      
                {{Form::label('RSI', 'MACD', ['class'=>'control-label']) }}
                {{ Form::checkbox('name','value') }}      
                {{Form::label('RSI', 'RSI', ['class'=>'control-label']) }}
                <br>
                {{Form::label('RSI', 'Volume Indicators:', ['class'=>'label label-default']) }}
                {{ Form::checkbox('name','value') }}      
                {{Form::label('RSI', 'Bollinger Bands', ['class'=>'control-label']) }}
                {{ Form::checkbox('name','value') }}      
                {{Form::label('RSI', 'Parabolic SAR', ['class'=>'control-label']) }}
                <br>
                {{Form::label('RSI', 'Volatility Indicators:', ['class'=>'label label-default']) }}
                {{ Form::checkbox('name','value') }}      
                {{Form::label('RSI', 'Bollinger Bands', ['class'=>'control-label']) }}
                {{ Form::checkbox('name','value') }}      
                {{Form::label('RSI', 'Parabolic SAR', ['class'=>'control-label']) }}


                </div>
                </div>              

        </div>

        <div class="row form-group">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#chart_patterns">
                <button type="button" class="btn btn-warning btn-xs">Chart Patterns</button></a>
                <div id="chart_patterns" class="panel-collapse collapse">
                <div class="panel-body">
                {{Form::label('RSI', 'Moving Averages:', ['class'=>'label label-default']) }}
                {{ Form::checkbox('name','value') }}      
                {{Form::label('RSI', 'MA(25)', ['class'=>'control-label']) }}
                {{ Form::checkbox('name','value',false) }}      
                {{Form::label('RSI', 'MA(50)', ['class'=>'control-label']) }}                
                {{ Form::checkbox('name','value',false) }}      
                {{Form::label('RSI', 'MA(100)', ['class'=>'control-label']) }}
                <br>
                {{Form::label('RSI', 'Trend Indicators:', ['class'=>'label label-default']) }}
                {{ Form::checkbox('name','value') }}      
                {{Form::label('RSI', 'Bollinger Bands', ['class'=>'control-label']) }}
                {{ Form::checkbox('name','value') }}      
                {{Form::label('RSI', 'Parabolic SAR', ['class'=>'control-label']) }}
                {{ Form::checkbox('name','value') }}      
                {{Form::label('RSI', 'MACD', ['class'=>'control-label']) }}
                {{ Form::checkbox('name','value') }}      
                {{Form::label('RSI', 'RSI', ['class'=>'control-label']) }}
                <br>
                {{Form::label('RSI', 'Volume Indicators:', ['class'=>'label label-default']) }}
                {{ Form::checkbox('name','value') }}      
                {{Form::label('RSI', 'Bollinger Bands', ['class'=>'control-label']) }}
                {{ Form::checkbox('name','value') }}      
                {{Form::label('RSI', 'Parabolic SAR', ['class'=>'control-label']) }}
                <br>
                {{Form::label('RSI', 'Volatility Indicators:', ['class'=>'label label-default']) }}
                {{ Form::checkbox('name','value') }}      
                {{Form::label('RSI', 'Bollinger Bands', ['class'=>'control-label']) }}
                {{ Form::checkbox('name','value') }}      
                {{Form::label('RSI', 'Parabolic SAR', ['class'=>'control-label']) }}


                </div>
                </div>              

        </div>
        
        <div class="row form-group">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#candle_patterns">
                <button type="button" class="btn btn-danger btn-xs">Candle Patterns</button></a>
                <div id="candle_patterns" class="panel-collapse collapse">
                <div class="panel-body">
                {{Form::label('RSI', 'Basic:', ['class'=>'label label-default']) }}
                {{ Form::checkbox('name','value') }}      
                {{Form::label('RSI', 'Spinning Top', ['class'=>'control-label']) }}
                {{ Form::checkbox('name','value',false) }}      
                {{Form::label('RSI', 'Marubozu', ['class'=>'control-label']) }}                
                {{ Form::checkbox('name','value',false) }}      
                {{Form::label('RSI', 'Doji', ['class'=>'control-label']) }}
                {{ Form::checkbox('name','value',false) }}      
                {{Form::label('RSI', 'Hammer', ['class'=>'control-label']) }}
                {{ Form::checkbox('name','value',false) }}      
                {{Form::label('RSI', 'Hanging Man', ['class'=>'control-label']) }}
                {{ Form::checkbox('name','value',false) }}      
                {{Form::label('RSI', 'Inverted Hammer', ['class'=>'control-label']) }}
                {{ Form::checkbox('name','value',false) }}      
                {{Form::label('RSI', 'Shooting Star', ['class'=>'control-label']) }}
                <br>
                {{Form::label('RSI', 'Two-Stick Patterns:', ['class'=>'label label-default']) }}
                {{ Form::checkbox('name','value') }}      
                {{Form::label('RSI', 'Spinning Top', ['class'=>'control-label']) }}
                {{ Form::checkbox('name','value',false) }}      
                {{Form::label('RSI', 'Marubozu', ['class'=>'control-label']) }}                
                {{ Form::checkbox('name','value',false) }}      
                {{Form::label('RSI', 'Doji', ['class'=>'control-label']) }}
                {{ Form::checkbox('name','value',false) }}      
                {{Form::label('RSI', 'Hammer', ['class'=>'control-label']) }}
                {{ Form::checkbox('name','value',false) }}      
                {{Form::label('RSI', 'Hanging Man', ['class'=>'control-label']) }}
                {{ Form::checkbox('name','value',false) }}      
                {{Form::label('RSI', 'Inverted Hammer', ['class'=>'control-label']) }}
                {{ Form::checkbox('name','value',false) }}      
                {{Form::label('RSI', 'Shooting Star', ['class'=>'control-label']) }}
              
                </div>
                </div>              

        </div>

        <div class="row form-group">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#news">
                <button type="button" class="btn btn-success btn-xs">News Releases</button></a>
                <div id="news" class="panel-collapse collapse">
                <div class="panel-body">
                {{Form::label('RSI', 'Moving Averages:', ['class'=>'label label-default']) }}
                {{ Form::checkbox('name','value') }}      
                {{Form::label('RSI', 'MA(25)', ['class'=>'control-label']) }}
                {{ Form::checkbox('name','value',false) }}      
                {{Form::label('RSI', 'MA(50)', ['class'=>'control-label']) }}                
                {{ Form::checkbox('name','value',false) }}      
                {{Form::label('RSI', 'MA(100)', ['class'=>'control-label']) }}
                <br>
                {{Form::label('RSI', 'Trend Indicators:', ['class'=>'label label-default']) }}
                {{ Form::checkbox('name','value') }}      
                {{Form::label('RSI', 'Bollinger Bands', ['class'=>'control-label']) }}
                {{ Form::checkbox('name','value') }}      
                {{Form::label('RSI', 'Parabolic SAR', ['class'=>'control-label']) }}
                {{ Form::checkbox('name','value') }}      
                {{Form::label('RSI', 'MACD', ['class'=>'control-label']) }}
                {{ Form::checkbox('name','value') }}      
                {{Form::label('RSI', 'RSI', ['class'=>'control-label']) }}
                <br>
                {{Form::label('RSI', 'Volume Indicators:', ['class'=>'label label-default']) }}
                {{ Form::checkbox('name','value') }}      
                {{Form::label('RSI', 'Bollinger Bands', ['class'=>'control-label']) }}
                {{ Form::checkbox('name','value') }}      
                {{Form::label('RSI', 'Parabolic SAR', ['class'=>'control-label']) }}
                <br>
                {{Form::label('RSI', 'Volatility Indicators:', ['class'=>'label label-default']) }}
                {{ Form::checkbox('name','value') }}      
                {{Form::label('RSI', 'Bollinger Bands', ['class'=>'control-label']) }}
                {{ Form::checkbox('name','value') }}      
                {{Form::label('RSI', 'Parabolic SAR', ['class'=>'control-label']) }}


                </div>
                </div>              

        </div>

        <div class="row form-group">

                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#notes">
                <button type="button" class="btn btn-info btn-xs">Add Notes</button></a>
                <div id="notes" class="panel-collapse collapse">
                <div class="panel-body">      
                    {{Form::label('notes', 'Notes:', ['class'=>'control-label'])}}
                    {{ Form::textarea('notes',null, ['class'=>'form-control']) }}
                </div>
                </div>
        </div>

       <div class="row form-group pull-right">

                {{Form::submit('Create Transaction',['class'=>'btn btn-primary btn-sm']) }}

        </div>

{{ Form::close() }}

</div>

