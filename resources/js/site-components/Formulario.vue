<template>
  <div class="formulario-body">

      <form>

        <!-- display only for homepage form -->

        <div class="form-row mx-0 formulario-title" v-if="!this.joinpage">
          <ul class="list-inline m-0">
            <li
              class="col-sm-6 list-inline-item m-0 text-center"
              v-for="(item, index) in items"
              v-bind:key="index"
              v-bind:id="'list'+index"
              v-bind:class="step === item.id ? 'active_list': 'inactive_list'"
              @click.prevent="setStep(item.id)"
              v-html="item.titulo"></li>
          </ul>

          <div class="form-group col-md-12 select-mobile d-none">
            <vue-picker v-model="form_type" autofocus>
            <vue-picker-option selected value="1">O que <span class="puerto-rico-color">quero ver</span> na minha freguesia.</vue-picker-option>
            <vue-picker-option value="2">O que <span class="puerto-rico-color">não quero ver</span> na minha freguesia.</vue-picker-option>
          </vue-picker>
              <!-- <select name="freguesias">
                <option selected="selected">O que <span style="color: blue;">quero ver</span> na minha freguesia.</option>
                <option>O que <span style="color: red;">não quero ver</span> na minha freguesia.</option>
              </select> -->
          </div>

        </div>
        <div class="form-row first-row" :class="joinpage ? 'first-row-join-page' : ''">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Nome (opcional)</label>
            <input
              type="text"
              v-model="publico.nome"
              class="form-control"
              placeholder="Primeiro e último nome"
            />
            <small v-if="errors" class="campos-obrigatorios">
              <span v-for="(nome, index) in errors.nome" :key="index">{{nome}}</span>
            </small>
          </div>
          <div class="form-group col-md-6">
            <label for="inputEmail4">Data nascimento (opcional)</label>
            <datepicker v-model="publico.data_nascimento" :language="ptBR" format="dd/MM/yyyy" name="data_nascimento" placeholder="dd/mm/yyyy"></datepicker>
            <small v-if="errors" class="campos-obrigatorios">
              <span
                v-for="(data_nascimento, index) in errors.data_nascimento"
                :key="index"
              >{{data_nascimento}}</span>
            </small>
          </div>
        </div>

        <!-- second line -->
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Freguesia</label>
            <select name="freguesias" v-model="publico.freguesia" required>
              <option selected="selected">Selecione uma Freguesia</option>
              <option v-for="(freguesia, index) in freguesias" :key="index"> {{freguesia.nome}} </option>
            </select>
            <small v-if="errors" class="campos-obrigatorios">
              <span v-for="(freguesia, index) in errors.freguesia" :key="index">{{freguesia}}</span>
            </small>
          </div>
          <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" v-model="publico.email" class="form-control" placeholder="Email" required />
            <small v-if="errors" class="campos-obrigatorios">
              <span v-for="(email, index) in errors.email" :key="index">{{email}}</span>
            </small>
          </div>
        </div>

        <!-- text area row -->
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="inputEmail4">{{ this.joinpage ? 'O que a/o move?' : 'Mensagem'}}</label>
            <textarea v-model="publico.msg" class="form-control" id="textarea-mensagem" rows="8"></textarea>

            <small v-if="errors" class="campos-obrigatorios">
              <span v-for="(msg, index) in errors.msg" :key="index">{{msg}}</span>
            </small>
          </div>
        </div>


        <!-- last row -->

        <div class="form-row last-row">
          <div class="form-group col-md-6 left-privacy-policy">
            <input id="checkbox3" type="checkbox" v-model="publico.politica_privacidade" required>
             <label for="" class="mx-2"> Li e aceito a </label> <a :href="this.url_politica">Política de Privacidade</a>
            <small v-if="errors" class="campos-obrigatorios error-politica">
              <span v-for="(politica_privacidade, index) in errors.politica_privacidade" :key="index">{{politica_privacidade}}</span>
            </small>
          </div>
          <div class="form-group col-md-6 right-submit-button">
            <a
                href
                class="btn btn-lg btn-block flat p-0"
                v-bind:class="isDisabled"
                @click.prevent="save()"
              >Enviar</a>
          </div>
        </div>

      </form>

      <div class="form-status" v-if="showPopup">
          <span>A sua mensagem foi submetida com sucesso!</span> <a href @click.prevent="closePopup()">x</a>
      </div>

  </div>
</template>


<script>
import { VuePicker, VuePickerOption } from '@invisiburu/vue-picker'
// optional css
import '@invisiburu/vue-picker/dist/vue-picker.min.css'
Vue.component('VuePicker', VuePicker)
Vue.component('VuePickerOption', VuePickerOption)

import Datepicker from 'vuejs-datepicker';
import {ptBR} from 'vuejs-datepicker/dist/locale';


export default {
  props: ["routeindex", "editid", "joinpage", "url_politica"],
  components: {
    Datepicker
  },
  data: () => {
    return {
      ptBR: ptBR,
      showPopup: false,
      isDisabled: "",
      value: "Enviar",
      placeholderValue: "Data nascimento (dd/mm/aaaa)*",
      data_nascimento: "",
      step: 1,
      step_total: 3,
      form_type: '1',
      active_list: "inactive_list",
      items: [
        { id: 1, titulo: "O que <span>quero ver</span> na minha freguesia." },
        { id: 2, titulo: "O que <span>não quero ver</span> na minha freguesia." }
      ],
      errors: [],
      errorsrev: [],
      publico: {
        chave: 1,
        nome: "",
        data_nascimento: "",
        freguesia: "Selecione uma Freguesia",
        email: "",
        politica_privacidade: "",
        msg: "",
        tipo: ""
      },
      emptyPublico: {
        chave: 1,
        nome: "",
        data_nascimento: "",
        freguesia: "m",
        email: "",
        politica_privacidade: "",
        msg: "",
        tipo: ""
      },
      freguesias: [
        {id: 7, nome: 'Freiria'},
        {id: 13, nome: 'Ponte do Rol'},
        {id: 14, nome: 'Ramalhal'},
        {id: 18, nome: 'Santa Maria, São Pedro e Matacães'},
        {id: 17, nome: 'São Pedro da Cadeira'},
        {id: 1, nome: 'Silveira'},
        {id: 19, nome: 'Turcifal'},
        {id: 8, nome: 'União das Freguesias de A dos Cunhados e Maceira'},
        {id: 3, nome: 'União das Freguesias de Campelos e Outeiro da Cabeça'},
        {id: 5, nome: 'União das Freguesias de Carvoeira e Carmões'},
        {id: 6, nome: 'União das Freguesias de Dois Portos e Runa'},
        {id: 10, nome: 'União das Freguesias de Maxial e Monte Redondo'},
        {id: 20, nome: 'Ventosa'}
      ]
    };
  },
  mounted() {
    //this.displaySucess();

    //this.getFreguesias();

    this.setPlaceholder();

    window.addEventListener("resize", () => {
      this.setPlaceholder();
    });

  },
  watch: {
    data_nascimento: function() {
      if (this.data_nascimento) {
        this.placeholderValue = "";
      } else {
        this.setPlaceholder();
      }
    },
    form_type: function () {
        this.setStep(parseInt(this.form_type) || 1);
    },

    step: function () {
        this.form_type = this.step.toString();
        //this.setStep(parseInt(this.form_type) || 1);
    },
    
    // 'form.product_type': function () {
    //     this.clearProduct();
    // },
  },
  methods: {
    displaySucess() {
      $("#submit-success").modal("toggle");
    },
    prevStep() {
      if (this.step > 1) this.step--;
    },
    nextStep() {
      if (this.step < 3) this.step++;
    },
    setStep(step) {
      if (this.step <= this.step_total) this.step = step;
    },
    restoreForm() {
      this.data_nascimento = "";
      this.publico.freguesia = "Selecione uma Freguesia";
      this.publico = Object.assign({}, this.emptyPublico);
      this.errors = this.errorsrev = [];
    },
    setPlaceholder() {
      if ($(window).width() > 1200)
        this.placeholderValue = "Data nascimento (dd/mm/aaaa)*";
      else this.placeholderValue = "Data nascimento *";
    },
    async save() {
      //if (this.step == 1) {
        //this.publico.data_nascimento = this.data_nascimento;
        this.publico.tipo = this.step;

        if(this.publico.freguesia == "Selecione uma Freguesia")
          this.publico.freguesia = "";

        if(this.joinpage)
            this.publico.tipo = 3;
        if(!this.publico.politica_privacidade)
            this.publico.politica_privacidade = "";

        this.desativar();

        await axios
          .post("/wishes/store", this.publico)
          .then(success => {
            this.restoreForm();
            this.showPopup = true;
            setTimeout(() => {
                this.closePopup();
            }, 10000)
          })
          .catch(errors => {

            if (errors.response.status == 422) {
              this.errors = errors.response.data.errors;
            } else {
              console.log(errors.response.status);
            }
          });

        this.ativar();
      // } else {
      //   this.desativar();
      // }
    },
    async getFreguesias(){
      await axios
          .get("https://www.cm-tvedras.pt/api/agenda/freguesias", {
            headers: {}
          })
          .then(response => {
            console.log(response);
          })
          .catch(errors => {
            console.log(errors);
          });
    },
    desativar() {
      this.isDisabled = "disabled";
      this.value = "Enviando";
    },
    ativar() {
      this.value = "Enviar";
      this.isDisabled = "";
    },
    closePopup(){
        this.showPopup = false;
    }
  },
  computed: {
    disableButton: function() {
      if (this.step > 1) {
        return false;
      } else {
        return true;
      }
    }
  }
};
</script>
