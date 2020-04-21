<template>
    <div >
        <div v-for="table in tables" :key="table" :id="table + 'Issues'">
            <h2>{{ table | capitalize}} Issues (2)</h2>
            <table class="table">
                <thead>
                    <tr>
                        <td>Ticket #</td>
                        <td>Issue Title</td>
                        <td>Asset</td>
                        <td>Reported By</td>
                        <td>Assigned To</td>
                        <td>Actions</td>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="issue in issues[table]" :key="issue">
                        <td>{{issue.id}}</td>
                        <td>{{issue.title}}</td>
                        <td>
                            <a href="./asset-view.html">
                                {{ issue.asset.name }}
                            </a>
                        </td>
                        <td>
                            <a :href='"/user/" + issue.reportedBy.id'>
                                {{ issue.reportedBy.name }}
                            </a>
                        </td>
                        <td>
                            <a :href='"/user/" + issue.assignedTo.id'>
                               {{issue.assignedTo.name}}
                            </a>
                        </td>
                        <td>
                            <a :href='"/tickets/" + issue.id'>
                                View
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            tables: ['open', 'closed'],
            issues: {}
        }
    },

    mounted(){
        fetch('/data/asset-view.json')
            .then((response) => {
                return response.json();
            })
            .then((data) => {
                this.issues = data.issues
            })
    },
    
    filters: {
    capitalize: function (value) {
        if (!value) return ''
        value = value.toString()
        return value.charAt(0).toUpperCase() + value.slice(1)
  }
}
    
}
</script>