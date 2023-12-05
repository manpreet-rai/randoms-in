@extends('layouts.app')

@section('content')
    <section class="is-white has-text-centered py-6">
        <div class="container is-fluid">
            <div class="columns is-centered">
                <div class="column is-three-quarters is-family-secondary">
                    <h1 class="title is-size-2 has-text-weight-light">What's on your mind today?</h1>
                    <h2 class="subtitle is-size-3 has-text-weight-light">Share your ideas with us.</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="is-white" style="padding-bottom: 4rem;">
        <div class="container is-fluid">
            <div class="columns is-centered">
                <div class="column is-three-quarters">
                    <form id="form" accept-charset="UTF-8" action="/contact" method="POST" autocomplete="off">
                        @csrf
                        <div class="columns is-centered">
                            <div class="column is-half">
                                <div class="field">
                                    <label class="label">Name</label>
                                    <div class="control is-expanded">
                                        <input class="input is-medium @error('name') is-danger @enderror" name="name" type="text" value="{{ old('name') }}">
                                        @error('name') <p class="help is-danger">{{ $errors->first('name') }}</p> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="column is-half">
                                <div class="field">
                                    <label class="label">Email</label>
                                    <div class="control is-expanded">
                                        <input class="input is-medium @error('email') is-danger @enderror" name="email" type="email" value="{{ old('email') }}">
                                        @error('email') <p class="help is-danger">{{ $errors->first('email') }}</p> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="columns is-centered">
                            <div class="column is-half">
                                <div class="field">
                                    <label class="label">Project Type</label>
                                    <div class="control is-expanded">
                                        <div class="select is-medium is-fullwidth @error('projectType') is-danger @enderror">
                                            <select name="projectType" >
                                                <option value="0" disabled selected hidden> </option>
                                                <option>Android App</option>
                                                <option>iOS App</option>
                                                <option>Responsive Website</option>
                                                <option>Web App</option>
                                                <option>Desktop App</option>
                                                <option>Design Asset</option>
                                                <option>Ad Campaign</option>
                                            </select>
                                            @error('projectType') <p class="help is-danger">{{ $errors->first('projectType') }}</p> @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="column is-half">
                                <div class="field">
                                    <label class="label">Budget</label>
                                    <div class="control is-expanded">
                                        <div class="select is-medium is-fullwidth @error('budget') is-danger @enderror">
                                            <select name="budget" >
                                                <option value="0" disabled selected hidden> </option>
                                                <option>&lt; ₹25,000</option>
                                                <option>₹25,000 - ₹1,00,000</option>
                                                <option>₹1,00,000+</option>
                                            </select>
                                            @error('budget') <p class="help is-danger">{{ $errors->first('budget') }}</p> @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="columns is-centered">
                            <div class="column is-half">
                                <div class="field">
                                    <label class="label">Phone (with ISD code)</label>
                                    <div class="control is-expanded">
                                        <input class="input is-medium @error('phone') is-danger @enderror" name="phone" type="tel" value="{{ old('phone') }}">
                                        @error('phone') <p class="help is-danger">{{ $errors->first('phone') }}</p> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="column is-half">
                                <div class="field">
                                    <label class="label">Country</label>
                                    <div class="control is-expanded">
                                        <input class="input is-medium @error('country') is-danger @enderror" name="country" type="text" value="{{ old('country') }}">
                                        @error('country') <p class="help is-danger">{{ $errors->first('country') }}</p> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="columns is-centered">
                            <div class="column">
                                <div class="field">
                                    <label class="label">Additional Details</label>
                                    <div class="control is-expanded is-fullwidth">
                                        <textarea class="textarea is-medium @error('details') is-danger @enderror" name="details" rows="5" >{{ old('details') }}</textarea>
                                        @error('details') <p class="help is-danger">{{ $errors->first('details') }}</p> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="columns is-centered">
                            <div class="column is-4 is-offset-8">
                                <div class="columns is-centered">
                                    <div class="column is-half">
                                        <div class="field">
                                            <div class="control">
                                                <input type="submit" value="Submit" class="button is-info is-medium is-fullwidth" style="border-radius: 8px;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column is-half">
                                        <div class="field">
                                            <div class="control">
                                                <input type="reset" value="Reset" class="button is-danger is-medium is-fullwidth" style="border-radius: 8px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
