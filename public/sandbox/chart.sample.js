const sandboxChart = {
    id: 1,
    map: {
        projection: "World",
        colorSchemeLabels: [],
        colorSchemeValues: [],
        customNumericColors: [],
        customCategoryColors: {},
        customCategoryLabels: {},
        customHiddenCategories: {}
    },
    tab: "chart",
    data: { availableEntities: ["Germany", "Spain"] },
    note: "Note placeholder",
    slug: "slug-placeholder",
    type: "LineChart",
    title: "Placeholder Title",
    xAxis: { scaleType: "linear" },
    yAxis: { min: 0, scaleType: "linear" },
    maxTime: 64,
    tabularData: {
        rows: [
            {
                year: 2000,
                entity: "Germany",
                value: 452
            },
            {
                year: 2001,
                entity: "Germany",
                value: 459
            },
            {
                year: 2002,
                entity: "Germany",
                value: 259
            },
            {
                year: 2000,
                entity: "Spain",
                value: 564
            },
            {
                year: 2001,
                entity: "Spain",
                value: 122
            },
            {
                year: 2002,
                entity: "Spain",
                value: 999
            }
        ]
    },
    minTime: 2000,
    version: 1,
    subtitle: "Subtitle placeholder",
    hasMapTab: true,
    originUrl: "https://ourworldindata.org/placeholder",
    stackMode: "absolute",
    dimensions: [{ display: {}, property: "y", variableId: 1 }],
    sourceDesc: "Placeholder source",
    hasChartTab: true,
    isPublished: true,
    isExplorable: false,
    selectedData: [{ index: 0, entityId: 0 }],
    addCountryMode: "add-country",
    hideRelativeToggle: true
}
