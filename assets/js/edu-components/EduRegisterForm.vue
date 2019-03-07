<template>
    <div>
        <h3>Register form</h3>
        <form action="#">
            <div class="form-group row">
                <label class="col-3 col-form-label">Imię i nazwisko</label>
                <div class="col">
                    <input type="text" class="form-control" :class="{ 'is-invalid': $v.name.$error }" @input="$v.name.$touch()" placeholder="Imię i nazwisko" v-model="name">
                    <div class="invalid-feedback" v-if="$v.name.$dirty && !$v.name.required">Pole jest wymagane</div>
                    <div class="invalid-feedback" v-if="$v.name.$dirty && !$v.name.minLength">Wstaw minimum 2 znaki</div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-3 col-form-label">Adres e-mail</label>
                <div class="col">
                    <input type="email" class="form-control" :class="{ 'is-invalid': $v.email.$error }" @input="$v.email.$touch()" placeholder="Adres e-mail" v-model="email">
                    <div class="invalid-feedback" v-if="$v.email.$dirty && !$v.email.required">Pole jest wymagane</div>
                    <div class="invalid-feedback" v-if="$v.email.$dirty && !$v.email.email">Adres email jest niepoprawny</div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-3 col-form-label">Kraj</label>
                <div class="col">
                    <select class="form-control" :class="{ 'is-invalid': $v.country.$error }" @change="$v.country.$touch()" v-model="country" >
                        <option disabled value="">Wybierz kraj</option>
                        <option value="poland">Polska</option>
                        <option value="usa">Stany Zjednoczone</option>
                        <option value="china">Chiny</option>
                    </select>
                    <div class="invalid-feedback" v-if="$v.country.$dirty && !$v.country.required">Wybór kraju jest wymagany.</div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-3 col-form-label">Hasło</label>
                <div class="col">
                    <input type="password" class="form-control" :class="{ 'is-invalid': $v.password.$error }" placeholder="Hasło" v-model="password" @input="$v.password.$touch()">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-3 col-form-label">Powtórz hasło</label>
                <div class="col">
                    <input type="password" class="form-control" :class="{ 'is-invalid': $v.repeatPassword.$error }" placeholder="Powtórz hasło" v-model="repeatPassword" @input="$v.repeatPassword.$touch()">
                    <div class="invalid-feedback" v-if="$v.repeatPassword.$error">Hasła muszą być takie same.</div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-3 col-form-label"></label>
                <div class="col">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" :class="{ 'is-invalid': $v.terms.$error }" @change="$v.terms.$touch()" v-model="terms">
                        <label class="form-check-label">Akceptuję <a href="#">regulamin</a></label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col">
                    <button class="btn btn-primary float-right" :disabled="$v.$invalid">Wyślij</button>
                </div>
            </div>
        </form>
        <!-- <pre>
            {{ $v }}
        </pre> -->
    </div>
</template>
<script>
    import { validationMixin } from "vuelidate";
    import { required, minLength, email, sameAs } from "vuelidate/lib/validators";
    export default {
        name: "EduRegisterForm",
        mixins: [validationMixin],
        data() {
            return {
                name: "",
                email: "",
                country: "",
                terms: false,
                password: "",
                repeatPassword: ""
            };
        },
        validations: {
            name: {
                required,
                minLength: minLength(2)
            },
            email: {
                required,
                email
            },
            country: {
                required
            },
            terms: {
                required
            },
            password: {
                required
            },
            repeatPassword: {
                sameAsPassword: sameAs("password")
            }
        }
    };
</script>