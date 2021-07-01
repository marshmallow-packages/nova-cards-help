<template>
  <div class="flex justify-center items-centers">
    <div class="w-full max-w-xl">
      <heading class="flex mb-3">
        {{ __(card.title) }}
      </heading>
      <p class="text-90 leading-tight mb-8">
        {{ __(card.description) }}
      </p>

      <card>
        <table class="w-full" cellpadding="0" cellspacing="0">
          <tr v-for="item_row in card.items">
            <td v-for="item in item_row" class="align-top w-1/2 border-r border-b border-50">
              <a :href="resources" class="no-underline dim flex p-6">
                <div class="flex justify-center w-11 flex-no-shrink mr-6" v-html="item.icon"></div>
                <div>
                  <heading :level="3" class="mb-3">
                    {{ __(item.title) }}
                  </heading>
                  <p class="text-90 leading-normal" v-html="item.description"></p>
                </div>
              </a>
            </td>
          </tr>
        </table>
      </card>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Help',

  props: {
    card: Object,
  },

  methods: {
    link(path) {
      return `https://nova.laravel.com/docs/${this.version}/${path}`
    },
  },

  mounted() {
    console.log(this.card.title);
    console.log(this.card);
      this.title = this.card.title
  },

  computed: {
    resources() {
      return this.link('resources')
    },
    actions() {
      return this.link('actions/defining-actions.html')
    },
    filters() {
      return this.link('filters/defining-filters.html')
    },
    lenses() {
      return this.link('lenses/defining-lenses.html')
    },
    metrics() {
      return this.link('metrics/defining-metrics.html')
    },
    cards() {
      return this.link('customization/cards.html')
    },
    version() {
      const parts = window.Nova.config.version.split('.')
      parts.splice(-2)

      return `${parts}.0`
    },
  },
}
</script>
