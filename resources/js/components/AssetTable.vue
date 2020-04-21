<template>
    <div>
        <table class="table">
        <thead>
            <tr>
                <td>Asset #</td>
                <td>Name</td>
                <td>Manufacturer</td>
                <td>Type</td>
                <td>Assigned To</td>
                <td>Location</td>
                <td>Issues</td>
                <td>Actions</td>
            </tr>
        </thead>
        <tbody >
            <tr v-for="asset in assets[currentPage]" :key="asset.id">
                <td>{{asset.id}}</td>
                <td>{{ asset.name }}</td>
                <td>{{asset.manufacturer}}</td>
                <td>{{ asset.type }}</td>
                <td>
                    <a :href='"/user/" + asset.assignee.id'>{{ asset.assignee.name }}</a>
                </td>
                <td>
                    <a :href='"/location/"+ asset.location.id'>{{ asset.location.location }}</a>
                </td>
                <td>{{ asset.issues.total }} ({{ asset.issues.open }} open / {{ asset.issues.closed }} closed)</td>
                <td>
                    <a href="/asset-view">View</a>
                    <a href="#">Create Ticket</a>
                </td>
            </tr>
        </tbody>
    </table>

    <nav aria-label="...">
        <ul class="pagination">
            <li class="page-item" v-for="pageNumber in pageCount" :class="{active : pageNumber-1 === currentPage }">
                <a class="page-link"  href="#" @click="currentPage = pageNumber - 1">{{ pageNumber }}</a>
            </li>
        </ul>
    </nav>
    </div>
</template>

<script>
export default {
    data() {
        return {
            assets: [],
            pageCount: 0,
            currentPage: 0
        }
    },

      mounted(){
        fetch('/data/assets.json')
            .then((response) => {
                return response.json();
            })
            .then((data) => {
                this.paginationChunks(data.assets.filter(obj => obj !== null), 10)
            })
    },

    methods:{
        paginationChunks(arr, size){
            let chunks = Array.from({ length: Math.ceil(arr.length / size) }, (v, i) =>
                            arr.slice(i * size, i * size + size)
                            );
            this.pageCount = chunks.length;

            this.assets = chunks


        }
    }
}
</script>