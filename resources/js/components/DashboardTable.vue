<template>
<div id="pastSLA" class="mt-3">
        <h2>Issues past SLA (6)</h2>
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
                <tr v-for="issue in table_data" :key="issue">
                        <td>{{issue.id}}</td>
                        <td>{{issue.title}}</td>
                        <td>
                            <a href="/asset-view">
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
</template>

<script>
export default {
    data() {
        return {
            table_data: []
        }
    },
  mounted(){
        fetch('/data/dashboard.json')
            .then((response) => {
                return response.json();
            })
            .then((data) => {
                this.table_data = data.pastSla.issues
            })
    },
}
</script>
