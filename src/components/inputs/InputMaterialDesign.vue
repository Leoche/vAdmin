<template>
  <section>
    <b-field>
      <b-autocomplete
        v-model="name"
        ref="autoMdi"
        :data="filteredDataObj"
        placeholder="e.g. account-circle"
        field="name"
        expanded
        :class="{'is-disable': disabled}"
        @select="onSelect">

        <template slot-scope="props">
          <div class="media">
            <div class="media-left">
              <i class="mdi mdi-16px" :class="props.option | iconName"></i>
            </div>
            <div class="media-content">
              {{ props.option | readeableName}}
            </div>
          </div>
        </template>
      </b-autocomplete>
      <p class="control" v-if="selected !== null">
        <span class="button is-static">
            <i class="mdi mdi-24px" :class="selected | iconName"></i>
        </span>
      </p>
    </b-field>
  </section>
</template>

<script>
  export default {
    name: 'InputMaterialDesign',
    data () {
      return {
        data: [],
        name: '',
        selected: null,
        disabled: false
      }
    },
    props: ['default'],
    filters: {
      iconName: function (value) {
        if (!value || value === '') return 'mdi-help'
        return 'mdi-' + value
      },
      readeableName: function (value) {
        if (!value) return ''
        value = value.toString().replace('.svg', '').replace(/-/g, ' ')
        return value.charAt(0).toUpperCase() + value.slice(1)
      }
    },
    computed: {
      filteredDataObj () {
        let results = this.data.filter((option) => {
          return (this.name) ? option
            .toString()
            .toLowerCase()
            .match(new RegExp('(.*)' + this.name.toLowerCase().replace(' ', '-') + '(.*)', 'g')) !== null : false
        })
        return results
      },
      initialized () {
        return this.$store.getters.isContentFetched
      }
    },
    methods: {
      onSelect (option) {
        if (!this.initialized) {
          return false
        }
        if (option !== null) {
          this.selected = option
          this.$emit('select', {value: option, name: this.name})
        }
      }
    },
    mounted () {
      this.$http.get(`https://api.github.com/repos/Templarian/MaterialDesign-SVG/contents/meta.json`)
      .then(({ data }) => {
        let newData = []
        let icons = JSON.parse(atob(data.content))
        for (let index in icons) {
          newData.push(icons[index].name)
        }
        this.data = newData
        console.log('this.data', this.data)
        this.selected = this.default
        this.$refs.autoMdi.setSelected(this.default)
      })
    }
  }
</script>