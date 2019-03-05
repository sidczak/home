<template>
    <div>
        <form action="#">
            <div class="form-group row">
                <label class="col-3 col-form-label">Imię i nazwisko</label>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Imię i nazwisko" v-model="name">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-3 col-form-label">Adres e-mail</label>
                <div class="col">
                    <input type="email" class="form-control" placeholder="Adres e-mail" v-model="email">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-3 col-form-label">Kraj</label>
                <div class="col">
                    <select class="form-control" v-model="country" >
                        <option disabled value="">Wybierz kraj</option>
                        <option value="poland">Polska</option>
                        <option value="usa">Stany Zjednoczone</option>
                        <option value="china">Chiny</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-3 col-form-label">Hasło</label>
                <div class="col">
                    <input type="password" class="form-control" placeholder="Hasło">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-3 col-form-label">Powtórz hasło</label>
                <div class="col">
                    <input type="password" class="form-control" placeholder="Powtórz hasło">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-3 col-form-label"></label>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" v-model="terms">
                        <label class="form-check-label">Akceptuję <a href="#">regulamin</a></label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col">
                    <button class="btn btn-primary float-right">Wyślij</button>
                </div>
            </div>
        </form>
<!--         <pre>
            {{ $v }}
        </pre> -->
    </div>
</template>
<script>
    import { validationMixin } from "vuelidate";
    import { required, minLength, email } from "vuelidate/lib/validators";
    export default {
        name: "EduRegisterForm",
        mixins: [validationMixin],
        data() {
            return {
                name: "",
                email: "",
                country: "",
                terms: false
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
            }
        }
    };
</script>
