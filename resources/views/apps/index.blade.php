@extends('layouts.backend')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="services">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <!-- section title -->
                            <div class="text-center">
                                <h2 class="section_title">Apps</h2>
                            </div>
                            <div class="service_items">
                                <div class="row justify-content-md-center">
                                    <!-- start service single items -->
                                    <div class="col col-lg-12 col-md-12 col-sm-12">
                                        <div class="apps_single_item row justify-content-md-center col-lg-12 col-md-12 col-sm-12">                                          
                                            <div class="col col-lg-auto col-md-auto col-sm-auto text-center">
                                                <a data-toggle="modal" href="" data-target=".bd-ipsum-modal-xl"><h6 class="pl-2 text-center"> Mean Girl Ipsum</h6></a>
                                                <p class="text-center"><i>~ Stop trying to make Ipsum happen ~</i></p>
                                            </div>
                                            <div class="col col-lg-12 col-md-12 col-sm-12">
                                            <p class="text-center pt-2"><strong>The Judgiest Text Generator Ever Made</strong></p>
                                            <p class="text-center">This dummy text will make you way <br>more popular at your next code review.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bd-ipsum-modal-xl" tabindex="-1" role="dialog" aria-labelledby="MeanGirlIpsum" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content shadow mb-5 bg-light rounded-0">
            <div class="col-lg-12 px-3 pt-3">
                <h4 class="text-center">Mean Girl Ipsum</h4>
                <hr>
            </div>
            <div class="col-lg-12 mb-3">
                <form>
                  <div class="form-row justify-content-md-center">
                      <div class="form-group col col-md-1">
                        <input type="text" class="form-control" id="quantity" value="3">
                      </div>
                      <div class="form-group col col-md-3">
                        <select class="form-control" id="textType" value="">
                          <option>Paragraphs</option>
                          <option>Sentences</option>
                          <option>Words</option>
                        </select>
                      </div>
                      <div class="form-group col col-md-2">
                        <button id="generate" class="btn btn-pink" type="button">Generate</button>
                      </div>
                  </div>
                  <div class="form-row justify-content-md-center">
                      <div class="form-group col col-md-8">
                        <textarea class="form-control" id="hotGoss" rows="8" value="" placeholder="Your gossip will appear here..."></textarea>
                      </div>
                  </div>
                  <div class="col-md-12 text-center">
                    <button class="btn btn-pink" type="button" id="copyGoss">Copy Word Vomit</button>
                  </div>
                </form>
            </div>
        </div>
      </div>
    </div>
@endsection